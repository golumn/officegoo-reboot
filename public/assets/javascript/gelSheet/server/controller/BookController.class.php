<?php
/*  Gelsheet Project, version 0.0.1 (Pre-alpha)
 *  Copyright (c) 2008 - Ignacio Vazquez, Fernando Rodriguez, Juan Pedro del Campo
 *
 *  Ignacio "Pepe" Vazquez <elpepe22@users.sourceforge.net>
 *  Fernando "Palillo" Rodriguez <fernandor@users.sourceforge.net>
 *  Juan Pedro "Perico" del Campo <pericodc@users.sourceforge.net>
 *
 *  Gelsheet is free distributable under the terms of an GPL license.
 *  For details see: http://www.gnu.org/copyleft/gpl.html
 *
 */

class BookController extends FrontController {

	
	public function saveBook($book, $inputFormat = 'jsons', $outputFormat = 'db') {
		if (get_magic_quotes_gpc()){
			$book = stripslashes ( $book );
		}
		$newBook = new Book ();
		$json_obj = json_decode($book);

		if (! isset ( $json_obj )) {
			$error = new GsError ( 401, "Ups!!! Sorry, Book has not received properly to server. Be aware you are running an alpha version." );
			if ($error->isDebugging ()) {
				$error->addContentElement ( "Recieved data", $book );
			}
			throw $error;
		}
		
		//TODO: Remove when user functionalities added
		$json_obj->userId = 0;
		
		switch ($outputFormat) {
			case 'xls'  : 
			case 'xlsx' : 
			case 'pdf'  : 
			case 'ods'  :
				
				$jsonBook = $json_obj->bookContent;
				$jsonBook->bookId = $json_obj->bookId;
				$jsonBook->bookName = $json_obj->bookName;
				
				$newBook->fromJson ($jsonBook );
				$controller = new ExportController ();
				$controller->generateBook ( $newBook, $outputFormat );
				break;
			default :
				// INSERT INTO DB 
				$bookId = $json_obj->bookId;
				$bookName = $json_obj->bookName; 
				
				// Save BookContent in JSON Format 
				$bookContent = addslashes(FastJSON::encode($json_obj->bookContent));
				 
				if (is_numeric ( $bookId )) {
					$res = mysql_query ( "SELECT BookId FROM " . table ( 'books' ) . " where BookId=$bookId" );
					if (! $res) {
						$error = new GsError ( 302, "Error loading book." );
						if ($error->isDebugging ()) {
							$error->addContentElement ( "BookId", $bookId );
							$err = str_replace ( "'", '"', mysql_error () );
							$error->addContentElement ( "MySql Error", $err );
						}
						throw $error;
						$hasErrors = true;
					}
					
					$sql = "UPDATE " . table ( 'books' ) . " SET BookContent = '".$bookContent."' WHERE BookId = $bookId ";
					$ok = @mysql_query ( $sql );
				} else {
					$sql = "INSERT INTO " . table ( 'books' ) . " (BookName, BookContent)  VALUES  ('$bookName','')  ";
					$ok = @mysql_query ( $sql );
					if ($ok) {
						$bookId = mysql_insert_id ();
//						$newBook->bookId = $bookId ;
					$sql = "UPDATE " . table ( 'books' ) . " SET BookContent = '".$bookContent."' WHERE BookId = $bookId ";
						$ok = @mysql_query ( $sql );	
					}
				}
				if (! ok) {
					throw new GsError ( 401, "Ups!!! Sorry, Book has not been saved properly to server. Be aware you are running an alpha version." );
				} else {
					throw new Success ( 'Book saved succesfully', "{'BookId':" . $bookId . "}" );
				}
				break;
		}
	}
	
	public function find($id = null) {
		$id = mysql_escape_string($id);
		if ($id != null) {
			$sql = "SELECT BookId, BookName, BookContent FROM ". table("books"). " WHERE bookId = $id" ;
			if ($res = @mysql_query($sql) ){
				if ($row = @mysql_fetch_object ( $res )){
					return ("{\"bookId\":$row->BookId,\"bookName\":\"$row->BookName\",\"bookContent\":$row->BookContent}") ;					 
				}
			}
		}
		
		throw new GsError ( 303, "Error loading book." );
	}
	
	public function getBooks() {
		$sql = "select * from " . table ( 'books' );
		$result = @mysql_query ( $sql );
		while ( $row = @mysql_fetch_object ( $result ) ) {
			$books [] = array ('bookId' => $row->bookId, 'bookName' => $row->bookName );
		}
		return $books;
	}
	
	function deleteBook($bookId) {
		if (@mysql_query ( "START TRANSACTION" ) && @mysql_query ( "DELETE FROM `" . table ( 'cells' ) . "` WHERE `SheetId` IN (SELECT `SheetId` FROM `" . table ( 'sheets' ) . "` WHERE `BookId` = $bookId)" ) && @mysql_query ( "DELETE FROM `" . table ( 'mergedCells' ) . "` WHERE `SheetId` IN (SELECT `SheetId` FROM `" . table ( 'sheets' ) . "` WHERE `BookId` = $bookId)" ) && @mysql_query ( "DELETE FROM `" . table ( 'rows' ) . "` WHERE `SheetId` IN (SELECT `SheetId` FROM `" . table ( 'sheets' ) . "` WHERE `BookId` = $bookId)" ) && @mysql_query ( "DELETE FROM `" . table ( 'columns' ) . "` WHERE `SheetId` IN (SELECT `SheetId` FROM `" . table ( 'sheets' ) . "` WHERE `BookId` = $bookId)" ) && @mysql_query ( "DELETE FROM `" . table ( 'sheets' ) . "` WHERE `BookId` = $bookId" ) && @mysql_query ( "DELETE FROM `" . table ( 'fontStyles' ) . "` WHERE `BookId` = $bookId" ) && @mysql_query ( "DELETE FROM `" . table ( 'books' ) . "` WHERE `BookId` = $bookId" ) && @mysql_query ( "COMMIT" )) {
			throw new Success('Book deleted succesfully',"{'BookId':$bookId}");
		} else {
			$error = new GsError ( 302, "Error deleting book." );
			if ($error->isDebugging ()) {
				$err = str_replace ( "'", '"', mysql_error () );
				$error->addContentElement ( "BookId", $bookId );
				$error->addContentElement ( "MySql Error", $err );
			}
			throw $error;
		}
	}
}

?>