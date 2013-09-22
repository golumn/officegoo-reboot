<?php return array(
	'administration tool name test_mail_settings' => 'Teste das configurações do email',
	'administration tool desc test_mail_settings' => 'Use esta ferramenta para enviar emails de testes para checar se o Feng Office está corretamente configurado',
	'administration tool name mass_mailer' => 'Mensagens em massa',
	'administration tool desc mass_mailer' => 'Ferramenta que permite enviar mensagens a qualquer grupo de usuários registrados no sistema',
	'configuration' => 'Configuração',
	'mail transport mail()' => 'Configurações padrões do PHP',
	'mail transport smtp' => 'Servidor de SMTP',
	'secure smtp connection no' => 'Não',
	'secure smtp connection ssl' => 'Sim, use SSL',
	'secure smtp connection tls' => 'Sim, use TLS',
	'file storage file system' => 'Sistema de arquivos',
	'file storage mysql' => 'Base de dados (MySQL)',
	'config category name general' => 'Geral',
	'config category desc general' => 'Configurações gerais do Feng Office',
	'config category name mailing' => 'Correspondência',
	'config category desc mailing' => 'Use este conjunto de configurações para que o Feng Office possa enviar email. Você pode usar as opções de configuração fornecidas pelo seu php.ini ou configurá-lo para usar um outro servidor SMTP',
	'config option name site_name' => 'Nome do site',
	'config option desc site_name' => 'O nome do site será apresentado no Painel Principal',
	'config option name file_storage_adapter' => 'Armazenamento de arquivos',
	'config option desc file_storage_adapter' => 'Selecione onde você deseja armazenar os anexos, avatars, logotipos e qualquer outro documento carregado. <strong>A base de dados é recomendada</strong>.',
	'config option name default_project_folders' => 'Pastas padrões',
	'config option desc default_project_folders' => 'Pastas que serão criadas quando o projeto é criado. Um nome de pasta por linha. Linhas duplicadas ou vazias serão ignoradas',
	'config option name theme' => 'Tema',
	'config option desc theme' => 'Usando temas você pode alterar a aparência padrão do Feng Office',
	'config option name days_on_trash' => 'Dias na lixeira',
	'config option desc days_on_trash' => 'Quantos dias um objeto deve ser mantido na lixeira antes de ser automaticamente apagado. Se 0, objectos não serão apagados da lixeira.',
	'config option name enable_email_module' => 'Habilitar Módulo de Email.',
	'config option desc enable_email_module' => 'Determina se a aba Email estará disponível no Feng Office.',
	'config option name time_format_use_24' => 'Usar formato 24 horas para descrição de tempo',
	'config option desc time_format_use_24' => 'Se habilitado as descrições de tempo serão mostradas como \'hh:mm\' de 00:00 to 23:59, caso contrário, serão exibidas de 1 to 12 usando AM or PM.',
	'config option name upgrade_check_enabled' => 'Permitir a verificação de atualizações',
	'config option desc upgrade_check_enabled' => 'Se "Sim" o sistema vai buscar uma vez por dia se há novas versões do Feng Office disponível para baixar',
	'config option name work_day_start_time' => 'Hora inicial do dia de trabalho',
	'config option desc work_day_start_time' => 'Definir a hora inicial do dia de trabalho',
	'config option name exchange_compatible' => 'Modo de compatibilidade com o Microsoft Exchange',
	'config option desc exchange_compatible' => 'Se você estiver usando o Microsoft Exchange Server e marcar esta opção com "Sim" evitará problemas conhecidos.',
	'config option name mail_transport' => 'Transporte de email',
	'config option desc mail_transport' => 'Você pode usar as configurações do PHP para enviar mensagens ou especificar um servidor SMTP',
	'config option name smtp_server' => 'Servidor SMTP',
	'config option name smtp_port' => 'Porta SMTP',
	'config option name smtp_authenticate' => 'Usar autenticação SMTP',
	'config option name smtp_username' => 'Login do SMTP',
	'config option name smtp_password' => 'Senha do SMTP',
	'config option name smtp_secure_connection' => 'Use conexão SMTP segura',
	'can edit company data' => 'Permitir editar dados da Empresa',
	'can manage security' => 'Permitir editar configurações de segurança',
	'can manage workspaces' => 'Permitir editar configurações da Área de Trabalho',
	'can manage configuration' => 'Permitir editar configurações',
	'can manage contacts' => 'Permitir editar contatos',
	'group users' => 'Usuários do grupo',
	'user ws config category name dashboard' => 'Opções do Painel Principal',
	'user ws config category name task panel' => 'Opções do Painel de tarefas',
	'user ws config option name show pending tasks widget' => 'Mostrar quadro de tarefas pendentes',
	'user ws config option name pending tasks widget assigned to filter' => 'Mostrar tarefas atribuídas a',
	'user ws config option name show late tasks and milestones widget' => 'Mostrar quadro de marcos e tarefas atrasadas',
	'user ws config option name show messages widget' => 'Mostrar quadro mensagens',
	'user ws config option name show comments widget' => 'Mostrar quadro de comentários',
	'user ws config option name show documents widget' => 'Mostrar quadro de documentos',
	'user ws config option name show calendar widget' => 'Mostrar quadro de calendário',
	'user ws config option name show charts widget' => 'Mostrar quadro de gráficos',
	'user ws config option name show emails widget' => 'Mostrar quadro de emails',
	'user ws config option name my tasks is default view' => 'Visão padrão exibe apenas as tarefas a mim atribuídas',
	'user ws config option desc my tasks is default view' => 'Se selecionar não, então exibe todas as tarefas',
	'user ws config option name show tasks in progress widget' => 'Exibir o container \'Tarefas em progresso\' ',
	'user ws config option name can notify from quick add' => 'Checkbox de notificação em adição rápida',
	'user ws config option desc can notify from quick add' => 'Se o checkbox estiver marcado então o usuário atribuído pode ser notificado após adição rápida de tarefa',
	'backup process desc' => 'Um BackUp salva o estado corrente da Aplicação em uma pasta comprimida. Isto pode ser usado para facilmente executar uma cópia de segurança da instalação. <br> Gerar um backup do Banco de Dados pode gastar pouco mais de alguns segundos, Assim fazer um backup é um processo em três etapas: <br>1.- Lançar processo de backup, <br>2.- Download do backup gerado. <br> 3.- Opcionalmente, um backup pode ser apagado, neste caso, ele não estará disponível no futuro. <br> ',
	'start backup' => 'Lançar processo de backup',
	'start backup desc' => 'Lançar um processo de BackUp implica em apagar os anteriores e gerar um novo arquivo de backup.',
	'download backup' => 'Download do arquivo de BackUp',
	'download backup desc' => 'É necessário gerar um BackUp para ele estar disponível para download.',
	'delete backup' => 'Apagar BackUp',
	'delete backup desc' => 'Exclua o último BackUp e ele não estará disponível para  download. Apagar arquivo de BackUp após download é altamente recomendável.',
	'backup' => 'Backup',
	'backup menu' => 'Menu de Backup',
	'last backup' => 'Último BackUp foi criado em',
	'no backups' => 'Não existe BackUp para download',
	'user ws config option name always show unread mail in dashboard' => 'Sempre exibir email não lido no painel',
	'user ws config option desc always show unread mail in dashboard' => 'Quando a opção NÃO for escolhida, os emails do espaço ativo serão exibidos',
	'workspace emails' => 'Espaço de Emails',
	'user ws config option name tasksShowWorkspaces' => 'Exibir Espaços de Trabalho',
	'user ws config option name tasksShowTime' => 'Exibir horas',
	'user ws config option name tasksShowDates' => 'Exibir datas',
	'user ws config option name tasksShowTags' => 'Exibir Etiquetas',
	'user ws config option name tasksGroupBy' => 'Agrupar por',
	'user ws config option name tasksOrderBy' => 'Ordenar por',
	'user ws config option name task panel status' => 'Status',
	'user ws config option name task panel filter' => 'Filtrar por',
	'user ws config option name task panel filter value' => 'Valor do Filtro',
	'templates' => 'Modelos',
	'add template' => 'Adicionar modelo',
	'confirm delete template' => 'Confirma que deseja apagar este modelo?',
	'no templates' => 'Não existem modelos',
	'template name required' => 'O nome do modelo é requerido',
	'can manage templates' => 'Pode gerenciar modelos',
	'new template' => 'Novo modelo',
	'edit template' => 'Editar modelo',
	'template dnx' => 'O modelo não existe',
	'success edit template' => 'Modelo modificado com sucesso',
	'log add cotemplates' => '{0} adicionado',
	'log edit cotemplates' => '{0} modificado',
	'success delete template' => 'Modelo excluído com sucesso',
	'error delete template' => 'Erro ao apagar modelo',
	'objects' => 'Objetos',
	'objects in template' => 'Objetos no modelo',
	'no objects in template' => 'Não existem objetos neste modelo',
	'add to a template' => 'Adicionar ao modelo',
	'add an object to template' => 'Adicionar novo objeto ao modelo',
	'you are adding object to template' => 'Adicionando {0} \'{1}\' ao modelo. Escolha um modelo abaixo ou crie um novo para este {0}.',
	'success add object to template' => 'Objeto adicionado ao modelo com sucesso',
	'object type not supported' => 'Este tipo de objeto não é permitido para modelos',
	'assign template to workspace' => 'Atribuir modelo ao Espaço de Trabalho',
	'config category name modules' => 'Módulos',
	'config category desc modules' => 'Use estas configurações para habilitar ou desabilitar módulos do Feng Office. Desabilitar um módulo apenas irá oculta-lo da interface gráfica. Isto não irá alterar as permissões dos usuários para criar ou editar conteúdo dos objetos.',
	'config option name enable_notes_module' => 'Habilitar Módulo Notas',
	'config option name enable_contacts_module' => 'Habilitar Módulo Contatos',
	'config option name enable_calendar_module' => 'Habilitar Módulo Calendário',
	'config option name enable_documents_module' => 'Habilitar Módulo Documentos',
	'config option name enable_tasks_module' => 'Habilitar Módulo Tarefas',
	'config option name enable_weblinks_module' => 'Habilitar Módulo Links da Web',
	'config option name enable_time_module' => 'Habilitar Módulo Tempo',
	'config option name enable_reporting_module' => 'Habilitar Módulo Relatórios',
	'user ws config category name general' => 'Geral',
	'user ws config option name localization' => 'Localização',
	'user ws config option desc localization' => 'Etiquetas e Datas serão exibidas de acordo com o arquivo de localização. É necessário atualizar para fazer efeito.',
	'user ws config option name initialWorkspace' => 'Área de Trabalho inicial',
	'user ws config option name rememberGUIState' => 'Lembrar o estado da interface',
	'user ws config option name time_format_use_24' => 'Usar formato 24 Hrs para exibição de tempo',
	'user ws config option desc work_day_start_time' => 'Determina a hora que o dia de trabalho começa',
	'cron events' => 'Evento programado',
	'about cron events' => 'Aprender sobre eventos programados...',
	'cron event name check_mail' => 'Verificar email',
	'cron event name purge_trash' => 'Limpar lixeira',
	'cron event name send_reminders' => 'Enviar lembretes',
	'cron event name check_upgrade' => 'Verificar atualização',
	'cron event name create_backup' => 'Criar BackUp',
	'next execution' => 'Próxima execução',
	'delay between executions' => 'Tempo entre execuções',
	'enabled' => 'Habilitado',
	'no cron events to display' => 'Não existem eventos programados para exibir',
	'success update cron events' => 'Eventos programados atualizados com sucesso',
	'manual upgrade' => 'Atualização manual',
	'automatic upgrade' => 'Atualização automática',
	'start automatic upgrade' => 'Iniciar atualização automática',
	'user ws config option name work_day_start_time' => 'Hora inicial do dia de trabalho',
	'cron event desc send_reminders' => 'Este evento programado irá enviar lembretes por email',
	'cron event desc check_upgrade' => 'Este evento programado irá verificar por novas versões do Feng Office',
	'cron event desc create_backup' => 'Cria um BackUp que você poderá baixar da seção BackUp da Administração.',
	'cron event desc check_mail' => 'Este evento programado irá verificar por novo email em todas as contas de email no Sistema.',
	'user ws config option desc initialWorkspace' => 'Estas configurações permitem escolher que área de trabalho será selecionada quando iniciar o Sistema, ou pode escolher lembrar a última área de trabalho utilizada.',
	'user ws config option desc rememberGUIState' => 'Isto permite salvar o estado da interface gráfica (tamanho de painéis, estado expandido / recolhido, etc) para o próximo login no Sistema. Aviso: Esta funcionalidade está em estado BETA.',
	'user ws config option desc time_format_use_24' => 'Se habilitado, o tempo será exibido como \'hh:mm\' das 00:00 até 23:59, Se não as horas serão mostradas de 1 a 12 usando AM ou PM.',
	'cron events info' => 'Eventos programados permitem executar tarefas no Feng Office, periodicamente, sem ter que acessar o sistema. Para ativar eventos você precisa configurar trabalhos programados para executar periodicamente o arquivo "cron.php", localizado na raiz da instalação do Feng Office. A periodicidade com que você execute o agendador de tarefas irá determinar a granularidade na qual você pode executar os eventos. Por exemplo, se você configurar uma agenda de tarefas para ser executada a cada cinco minutos, e você configurar o programador de eventos para verificar a existência de atualizações a cada um minuto, ele só será capaz de verificar se há atualizações a cada cinco minutos. Para saber mais sobre como configurar uma agenda de tarefas pergunte ao seu administrador de sistemas ou provedor de hospedagem.',
	'cron event desc purge_trash' => 'Este evento programado irá apagar objetos mais antigos do que a quantidade de dias especificada na configuração "Dias na lixeira".',
	'manual upgrade desc' => 'Para atualizar manualmente o Feng Office você tem que fazer o download da nova versão do Feng Office, extraí-lo para a raiz da sua instalação e depois ir para <a href="public/upgrade">\'public/upgrade\'</a> no seu navegador para iniciar o processo de atualização.',
	'automatic upgrade desc' => 'A atualização automática irá fazer o download e extrair a nova versão, e será executado o processo de upgrade para você. O servidor www precisa ter acesso de escrita em todas as pastas.',
	'config option name use_minified_resources' => 'Usar recurso de minimização JS.',
	'config option desc use_minified_resources' => 'Usar Javascript e CSS comprimido para aumentar a performance. Se modificar este item, voçê deverá recomprimir JS e CSS usando a ferramenta em public/tools.',
	'config category name passwords' => 'Senhas',
	'config category desc passwords' => 'Use estas configurações para gerenciar as opções de senhas',
	'config option name checkout_notification_dialog' => 'Diálogo de notificação de bloqueio para documentos',
	'config option desc checkout_notification_dialog' => 'Se habilitado, o usuário será questionado a escolher entre baixar o arquivo ou edita-lo',
	'config option name file_revision_comments_required' => 'Comentários sobre a Revisão são obrigatórios.',
	'config option name currency_code' => 'Moeda',
	'config option desc currency_code' => 'Símbolo da Moeda',
	'config option name min_password_length' => 'Comprimento mínimo da Senha',
	'config option desc min_password_length' => 'Número mínimo de caracteres exigido para a Senha',
	'config option name password_numbers' => 'Números na Senha',
	'config option desc password_numbers' => 'Quantidade de caracteres numéricos exigidos para a Senha',
	'config option name password_uppercase_characters' => 'Caracteres caixa alta na Senha',
	'config option desc password_uppercase_characters' => 'Quantidade de caracteres maiúsculos exigido para a senha',
	'config option name password_metacharacters' => 'Senha metacaracteres',
	'config option desc password_metacharacters' => 'Quantidade de metacaracteres exigido para a senha (ex.: ., $, *)',
	'config option name password_expiration' => 'Expiração da Senha em dias',
	'config option desc password_expiration' => 'Número de dias que uma nova senha é válida (0 para desabilitar a opção)',
	'config option name password_expiration_notification' => 'Notificação de expiração de Senha (dias de antecedência)',
	'config option desc password_expiration_notification' => 'Número de dias para notificar usuário antes da expiração da Senha (0 para desabilitar esta opção)',
	'config option name account_block' => 'Bloquear conta ao expirar a Senha',
	'config option desc account_block' => 'Bloqueia a conta do usuário quando a senha expira (exige conta de administrador para habilitar novamente)',
	'config option name new_password_char_difference' => 'Validar caracteres da nova senha conforme histórico de senhas',
	'config option desc file_revision_comments_required' => 'Se configurado, a adição de novos arquivos irá exigir do usuário um novo comentário para cada revisão.',
	'config option name show_feed_links' => 'Exibir link de Alimentação',
	'config option desc show_feed_links' => 'Isto permite-lhe mostrar links para alimentação RSS ou iCal para o usuário conectado ao longo de todo o Sistema, de modo que ele pode se inscrever para eles. ATENÇÃO: Estes links contêm informações que um usuário pode fazer login no sistema. Se um usuário ignorar este aviso poderá ter um comprometimento de todos os seus dados.',
	'config option name user_email_fetch_count' => 'Limite de emails a obter',
	'config option desc user_email_fetch_count' => 'Quantos emails obter quando o usuário clicar o botão "Verificar Contas de email". O uso de um número elevado poderá causar erros de timeout. Use 0 para não ter limite. Observe que isto não afeta a obtenção de email através do procedimento de tarefas agendadas.',
	'config option desc new_password_char_difference' => 'Validar uma nova senha que difere em pelo menos 3 caracteres contra as 10 últimas senhas utilizadas pelo usuário',
	'config option name validate_password_history' => 'Validar histórico de Senha',
	'config option desc validate_password_history' => 'Validar uma nova senha que não corresponde a nenhuma das últimas 10 senhas usadas pelo usuário',
	'config option name checkout_for_editing_online' => 'Bloquear automaticamente na edição on-line',
	'config option desc checkout_for_editing_online' => 'Quando um usuário edita um documento on-line será bloqueado para que ninguém mais possa editá-lo ao mesmo tempo',
	'can manage reports' => 'Pode gerenciar Relatórios',
	'user ws config category name calendar panel' => 'Opções de Calendário',
	'user ws config option name show dashboard info widget' => 'Exibir Quadro descrição do Espaço de Trabalho',
	'user ws config option name show getting started widget' => 'Exibir Quadro de inicio de uso do Sistema',
	'user ws config option name show_tasks_context_help' => 'Exibir contexto de ajuda para tarefas',
	'user ws config option desc show_tasks_context_help' => 'Se ativado, um contexto de ajuda será exibido no painel de tarefas',
	'user ws config option name start_monday' => 'Iniciar semana na segunda-feira',
	'user ws config option desc start_monday' => 'Irá mostrar o calendário com a Semana começando na segunda-feira (deve atualizar para aplicar as alterações)',
	'user ws config option name show_week_numbers' => 'Exibir número da Semana',
	'user ws config option desc show_week_numbers' => 'Exibir número da Semana na Vista Mensal e Semanal.',
	'user ws config option name date_format' => 'Formato de Data',
	'user ws config option desc date_format' => 'Formato padrão a ser aplicado aos valores de data.',
	'user ws config option name descriptive_date_format' => 'Descrição do formato de data',
	'user ws config option desc descriptive_date_format' => 'Formato padrão a ser aplicado à descrição dos valores de data.',
	'user ws config option name show_context_help' => 'Exibir Ajuda contextual',
	'user ws config option desc show_context_help' => 'Selecione se pretende visualizar sempre a Ajuda, nunca vê-la, ou vê-la até que cada caixa é fechada.',
	'show context help always' => 'Sempre',
	'show context help never' => 'Nunca',
	'show context help until close' => 'Até fechar',
	'backup config warning' => 'AVISO: Suas pastas tmp e config não serão arquivadas.',
	'cron event name send_notifications_through_cron' => 'Enviar notificações através da tarefa agendada',
	'cron event desc send_notifications_through_cron' => 'Se este evento for ativado notificações por e-mail será enviado através da tarefa agendada, e não quando gerados por Feng Office.',
	'cron event name backup' => 'BackUp Feng Office',
	'cron event desc backup' => 'Se o evento for ativado Feng Office terá BackUp periodicamente. O proprietário da instalação será capaz de fazer download dos backups através do Painel de Administração. Os backups do Feng Office são mantidos como um arquivo zip no diretório \'tmp / backup\'.',
	'select object type' => 'Selecionar tipo de objeto',
	'select one' => 'Selecione um',
	'email type' => 'Email',
	'custom properties updated' => 'Propriedade customizada foi atualizada',
	'user ws config option name noOfTasks' => 'Definir número de tarefas a serem exibidas por padrão',
	'autentify password title' => 'Autenticar Senha',
	'autentify password desc' => 'Você solicitou acesso ao Painel de Administração. <br/> Por favor, volte a introduzir a sua senha',
	'config option name ask_administration_autentification' => 'Autenticar Administração',
	'config option desc ask_administration_autentification' => 'Define se uma janela de diálogo para autenticação de senha será exibida quando acessando o Painel de Administração',
	'user ws config category name mails panel' => 'Opções de Email',
	'user ws config option name view deleted accounts emails' => 'Visualizar contas de email excluídas',
	'user ws config option desc view deleted accounts emails' => 'Permite-lhe ver os e-mails de contas excluídas (quando você excluir uma conta você não deve apagar os e-mails para que possa usar esta opção)',
	'user ws config option name block_email_images' => 'Bloquear imagens em email',
	'user ws config option desc block_email_images' => 'Não mostrar imagens que são incorporados em Email.',
	'user ws config option name draft_autosave_timeout' => 'Intervalo de auto-salvamento de rascunhos',
	'user ws config option desc draft_autosave_timeout' => 'Segundos entre cada operação de Auto-Salvamento para rascunhos de Emails (0 para desativar o auto-salvamento)',
	'add a parameter to template' => 'Criar um parâmetro para este modelo',
	'parameters' => 'Parâmetros',
	'user ws config option name amount_objects_to_show' => 'Número de objetos vinculados para exibir',
	'user ws config option desc amount_objects_to_show' => 'Defina o número de objetos vinculados a serem exibidos na Vista de Objetos',
	'user ws config option name show_two_weeks_calendar' => 'Mostrar duas semanas no quadro calendário',
	'user ws config option desc show_two_weeks_calendar' => 'Defina o quadro calendários para exibir duas semanas',
	'user ws config option name attach_docs_content' => 'Anexar conteúdo de arquivos',
	'user ws config option desc attach_docs_content' => 'Quando esta opção está definida para "Sim", arquivos anexos serão adicionadas como anexo regular do e-mail. Quando o "Não" é escolhido, arquivos anexos serão enviados como um link para o arquivo.',
	'edit default user preferences' => 'Editar preferências padrão do usuário',
	'default user preferences' => 'Preferências padrão do usuário',
	'default user preferences desc' => 'Escolher os valores padrão de preferências do usuário. Estes valores aplicam-se quando o usuário não tenha ainda escolhido um valor para uma opção.',
	'can manage time' => 'Permitido gerenciar tempo',
	'config option name smtp_address' => 'Endereço SMTP',
	'config option desc smtp_address' => 'Opcional. Alguns servidores exigem que você utilize um endereço de e-mail a partir do servidor para enviar e-mail. Deixar em branco para utilizar o endereço de e-mail do usuário.',
	'user ws config option name detect_mime_type_from_extension' => 'Detectar tipo MIME de extensão',
	'user ws config option desc detect_mime_type_from_extension' => 'Permitir detectar tipo MIME do arquivo por sua extensão',
	'can add mail accounts' => 'Pode adicionar contas de email',
	'user ws config option name max_spam_level' => 'Nível máximo permitido de spam',
	'user ws config option desc max_spam_level' => 'Quando buscar e-mails, mensagens de spam com avaliação superior a este valor serão enviadas para "lixeira". Defina como 0 para um máximo de filtragem, 10 sem filtragem. Esta opção só funciona se uma ferramenta de filtro de spam estiver instalada no seu servidor.',
	'user ws config option name hide_quoted_text_in_emails' => 'Ocultar texto citado ao ver e-mails',
	'mail accounts' => 'Contas de e-mail',
	'incoming server' => 'Servidor de entrada',
	'outgoing server' => 'Servidor de saída',
	'no email accounts' => 'Não existem contas de e-mail',
	'user ws config option name create_contacts_from_email_recipients' => 'Criar contatos de destinatários de e-mail',
	'mail drag drop classify option' => 'Classificar anexos',
	'mail drag drop dont option' => 'Não classificar anexos',
	'user ws config option name show_emails_as_conversations' => 'Mostrar e-mails como conversas',
	'user ws config option name search_engine' => 'Motor de busca',
	'search engine mysql like' => 'Completo',
	'search engine mysql match' => 'Rápido',
	'user ws config option name mail_drag_drop_prompt' => 'Classificar anexos de e-mail usando arrastar e soltar?',
	'mail drag drop prompt option' => 'Avisar usuário para uma ação',
	'user ws config option name autodetect_time_zone' => 'Detectar fuso horário',
	'user ws config option desc autodetect_time_zone' => 'Quando esta opção estiver habilitada, o fuso horário do usuário será detectado automaticamente pelo navegador.',
	'user ws config option name drag_drop_prompt' => 'Ação a ser tomada ao arrastar e soltar para área de trabalho',
	'drag drop prompt option' => 'Avisar usuário para uma ação',
	'drag drop move option' => 'Mover para novo espaço de trabalho e perder espaços de trabalho anterior',
	'drag drop keep option' => 'Adicionar ao novo espaço de trabalho, mantendo os espaços de trabalho anterior',
	'user ws config option desc mail_drag_drop_prompt' => 'Escolha o que deve ser feito com anexos de email quando arrastar um e-mail para um espaço de trabalho.',
	'user ws config option desc hide_quoted_text_in_emails' => 'Se ativado mensagens de e-mail será exibida sem o texto citado. Haverá uma opção para exibi-lo durante a leitura.',
	'user ws config option desc create_contacts_from_email_recipients' => 'Quando esta opção está definida para "Sim", um contato será criado automaticamente para cada endereço de email que enviar um e-mail. Você precisa da permissão "Pode gerir todos os contatos".',
	'user ws config option desc drag_drop_prompt' => 'Escolha qual a ação deve ser tomada quando arrastar um objeto para um espaço de trabalho.',
	'user ws config option desc show_emails_as_conversations' => 'Se habilitado e-mail serão agrupadas em conversas na lista de e-mails, mostrando todos os e-mails pertencentes a um mesmo segmento (respostas, encaminhamentos, etc) como uma entrada na listagem.',
	'user ws config option desc search_engine' => 'Escolher qual motor de busca que deseja utilizar. "Completo" vai fazer uma pesquisa mais exaustiva, mas levará muito mais tempo do que o "Rápido".',
	'config option name use_owner_company_logo_at_header' => 'Utilizar o logotipo do dono da empresa como logotipo   da aplicação',
	'config option desc use_owner_company_logo_at_header' => 'Coloque o logotipo do proprietário da empresa, no canto superior direito da tela. Deve atualizar (F5) para aplicar as alterações. Tamanho recomendado: 50x50 px.',
	'user ws config option name show activity widget' => 'Mostrar widget atividade',
	'user ws config option name activity widget elements' => 'Atividade tamanho widget',
	'user ws config option desc activity widget elements' => 'Número de itens exibidos no widget de atividade.',
	'user ws config option name task_display_limit' => 'O número máximo de tarefas para mostrar',
	'user ws config option desc task_display_limit' => 'Por motivos de desempenho, este número não deve ser muito grande. Use 0 para nenhum limite.',
); ?>
