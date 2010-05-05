<?php
// $Id$
// License http://creativecommons.org/licenses/by/2.5/br/
// ############################################################### //
// ## XOOPS Cube Legacy - Versão em Português
// ############################################################### //
// ## Por............: Mikhail Miguel
// ## Website........: http://xoopsbrasil.sourceforge.net/
// ## E-mail.........: mikhail@underpop.com
// ## AOL............: mikhailmiguel
// ## MSN............: mikhailmiguel@msn.com
// ## Orkut..........: 15440532260129226492
// ## Skype..........: mikhailmiguel
// ## Yahoo!.........: mikhail.miguel@yahoo.com.br
// ############################################################### //
// *************************************************************** //
define("_INSTALL_CHARSET","UTF-8");

define("_INSTALL_HEADER_MESSAGE","Siga a instalação lendo com cuidado todas as instruções e avisos de cada página mostrada.");
define("_INSTALL_L0","Bem-vindo ao assistente de instalação do XOOPS Cube 2.2");
define("_INSTALL_L1","Abra o arquivo mainfile.php com seu editor de textos e procure o seguinte código na linha 31:");
define("_INSTALL_L10","Por favor, pressione o botão abaixo se isto estiver realmente correto.");
define("_INSTALL_L100","O <strong>caminho virtual</strong> é um endereço válido.");
define("_INSTALL_L101","O <strong>caminho virtual</strong> não é um endereço válido.");
define("_INSTALL_L102","Confirmar as opções do banco de dados");
define("_INSTALL_L103","Recomeçar");
define("_INSTALL_L104","Verificar o banco de dados");
define("_INSTALL_L105","Tentar criar o banco de dados");
define("_INSTALL_L106","Não foi possível se conectar ao banco de dados.");
define("_INSTALL_L107","Por favor, verifique a configuração do banco de dados.");
define("_INSTALL_L108","O XOOPS Cube se conectou ao banco de dados corretamente.");
define("_INSTALL_L109","O banco de dados %s não existe.");
define("_INSTALL_L11","O caminho físico do diretório raiz (root) de seu servidor:");
define("_INSTALL_L110","O banco de dados %s existe, e uma conexão foi realizada corretamente.");
define("_INSTALL_L111","A conexão com o banco de dados foi realizada corretamente.<br />Prossiga para criar as tabelas.");
define("_INSTALL_L112","Configuração do administrador");
define("_INSTALL_L113","Tabela %s removida.");
define("_INSTALL_L114","Ocorreu um erro, não foi possível criar o banco de dados.");
define("_INSTALL_L115","Banco de dados criado corretamente.");
define("_INSTALL_L116","Inserir infomação");
define("_INSTALL_L117","Fim");
define("_INSTALL_L118","Ocorreu um erro, não foi possível criar a tabela %s.");
define("_INSTALL_L119","%d inserções na tabela %s.");
define("_INSTALL_L12","Endereço virtual (URL) em que o XOOPS Cube será instalado:");
define("_INSTALL_L120","Ocorreu um erro, não foi possível inserir %d entradas na tabela %s.");
define("_INSTALL_L121","Constante %s escrita com o valor %s.");
define("_INSTALL_L122","Ocorreu um erro, não foi possível escrever a constante %s.");
define("_INSTALL_L123","O arquivo %s foi gravado no diretório 'cache'");
define("_INSTALL_L124","Ocorreu um erro, não foi possível criar o arquivo %s no diretório cache/.");
define("_INSTALL_L125","Arquivo %s reescrito como %s.");
define("_INSTALL_L126","Não foi possível escrever no arquivo %s.");
define("_INSTALL_L127","Verifique os parâmetros dos caminhos virtual (url) e físico (path)..");
define("_INSTALL_L128","Escolha o idioma a ser usado na instalação");
define("_INSTALL_L13","Se as configurações acima estiverem corretas, pressione o botão abaixo para continuar.<br />(as tabelas ainda não foram criadas)");
define("_INSTALL_L130","O instalador detectou que o banco de dados já contém tabelas do XOOPS 1.3.x.<br />e vai tentar atualizá-las para XOOPS Cube.");
define("_INSTALL_L131","Algumas tabelas do XOOPS Cube já estão presentes em seu banco de dados.");
define("_INSTALL_L132","Atualização de tabelas");
define("_INSTALL_L133","A tabela %s foi atualizada corretamente...");
define("_INSTALL_L134","Erro ao tentar atualizar a tabela %s");
define("_INSTALL_L135","Lamento, não foi possível atualizar as tabelas do banco de dados.");
define("_INSTALL_L136","As tabelas do banco de dados foram atualizadas corretamente.");
define("_INSTALL_L137","Atualizando os módulos...");
define("_INSTALL_L138","Atualizando os comentários...");
define("_INSTALL_L139","Atualizando os avatares...");
define("_INSTALL_L14","Próximo passo »");
define("_INSTALL_L140","Atualizando os emos...");
define("_INSTALL_L141","Agora, o instalador atualizará cada módulo para funcionar com o XOOPS Cube Legacy.<br />Garanta que enviou todos os arquivos do XOOPS Cube ao seu servidor.<br />Esta ação vai demorar algum tempo para ser finalizada.");
define("_INSTALL_L142","Atualizando os módulos...");
define("_INSTALL_L143","Agora o instalador atualizará as configurações do antigo XOOPS 1.3.x para que elas possam ser utilizadas no XOOPS Cube.");
define("_INSTALL_L144","Atualizando a configuração...");
define("_INSTALL_L145","Comentário (ID: %s) inserido no banco de dados.");
define("_INSTALL_L146","Não foi possível inserir o comentário de número %s no banco de dados.");
define("_INSTALL_L147","Atualizando os comentários..");
define("_INSTALL_L148","Atualização completa.");
define("_INSTALL_L149","O instalador vai agora atualizar os comentários feitos na versão XOOPS 1.3.x, para serem usados no XOOPS Cube Legacy.<br />Esta ação vai demorar algum tempo a ser finalizada.");
define("_INSTALL_L15","Por favor, abra o arquivo mainfile.php e escreva as configurações do BD solicitadas");
define("_INSTALL_L150","O instalador vai agora atualizar os emoticons e ranks, para serem usados no XOOPS Cube.<br />Esta ação vai demorar algum tempo para ser finalizada.");
define("_INSTALL_L151","O instalador vai agora atualizar os personagens para serem usados no XOOPS Cube.<br />Esta ação vai demorar algum tempo para ser finalizada.");
define("_INSTALL_L152","Ocorreu um erro, não foi possível abrir %s.");
define("_INSTALL_L153","Ocorreu um erro, não foi possível atualizar %s.");
define("_INSTALL_L154","%s atualizado.");
define("_INSTALL_L155","Atualizando as imagens das graduações e emoticons...");
define("_INSTALL_L156","Atualizando as imagens dos avatares...");
define("_INSTALL_L157","Escolha as permissões para cada grupo de associado.");
define("_INSTALL_L158","Grupos na versão 1.3.x");
define("_INSTALL_L159","Administração");
define("_INSTALL_L16","%s é o endereço do seu sevidor de banco de dados.");
define("_INSTALL_L160","Visitantes cadastrados");
define("_INSTALL_L161","Visitantes anônimos");
define("_INSTALL_L162","É necessário selecionar uma permissão para cada tipo de grupo.");
define("_INSTALL_L163","A tabela %s foi removida corretamente...");
define("_INSTALL_L164","Ocorreu um erro, não foi possível remover a tabela %s.");
define("_INSTALL_L165","Estamos no meio de uma manutenção temporária do portal. Volte em alguns instantes. Pedimos desculpas pelo transtorno.");
define("_INSTALL_L166","Verifique as permissões de acesso do XOOPS_TRUST_PATH");
define("_INSTALL_L167","Verificando as permissões de leitura e escrita de diretórios e arquivos...");
define("_INSTALL_L17","%s é o nome do utilizador ('<em>username</em>') de sua conta de banco de dados.");
define("_INSTALL_L18","%s é a senha solicitada para aceder ao banco de dados.");
define("_INSTALL_L19","%s é o nome da suo banco de dados onde as tabelas do XOOPS Cube serão criadas.");
define("_INSTALL_L2","Agora, altere esta linha para:");
define("_INSTALL_L20","%s é o prefixo das tabelas que serão criadas durante a instalação.");
define("_INSTALL_L200","Atualizar");
define("_INSTALL_L21","O seguinte banco de dados não foi encontrado no servidor:");
define("_INSTALL_L210","Segunda etapa da instalação");
define("_INSTALL_L22","<b>Se desejar, prossiga para que o instalador tente criá-lo.</b>");
// define("_INSTALL_L22","Deseja tentar criá-lo?");
define("_INSTALL_L23","Sim");
define("_INSTALL_L24","Não");
define("_INSTALL_L25","Detectamos a seguinte informação do banco de dados nas suas configurações do arquivo mainfile.php. Por favor, corrija-a agora se ela não estiver correta.");
define("_INSTALL_L26","Configuração do banco de dados");
define("_INSTALL_L27","Servidor do banco de dados");
define("_INSTALL_L28","Nome do utilizador do banco de dados ('username')");
define("_INSTALL_L29","Nome do banco de dados");
define("_INSTALL_L3","Agora, na linha 35, mude %s para %s");
define("_INSTALL_L30","Prefixo da tabela");
define("_INSTALL_L31","Não foi possível criar o banco de dados. Entre em contato com o administrador do sistema para maiores detalhes.");
define("_INSTALL_L32","Fim da primeira parte da instalação.");
define("_INSTALL_L33","Clique <a href='../index.php'>AQUI</a> para ver a página inicial do seu portal.");
define("_INSTALL_L35","Se encontrou algum erro, favor contatar a equipe de desenvolvimento.");
define("_INSTALL_L36","Por favor, escolha o nome e a senha do administrador, e então clique no botão abaixo para inciar a criação das tabelas no banco de dados.");
define("_INSTALL_L37","Codinome do administrador");
define("_INSTALL_L38","E-mail do administrador");
define("_INSTALL_L39","Senha do administrador");
define("_INSTALL_L4","Certo, alterei as configurações acima, deixe-me tentar de novo.");
define("_INSTALL_L40","Criar tabelas");
define("_INSTALL_L41","Por favor, retorne e escreva todas as informações solicitadas.");
define("_INSTALL_L42","Retornar");
define("_INSTALL_L43","Banco de dados %s criado.");
define("_INSTALL_L44","Não foi possível criar %s");
define("_INSTALL_L45","Tabela %s criada");
define("_INSTALL_L46","Para que os módulos inclusos neste pacote funcionem corretamente, os seguintes arquivos precisam ter permissão de leitura/alteração pelo servidor. Por favor, altere as permissões para estes arquivos. (por exemplo:");
define("_INSTALL_L47","Prosseguir");
define("_INSTALL_L5","ATENÇÃO.");
define("_INSTALL_L51","Banco de dados");
define("_INSTALL_L52","Senha do banco de dados");
define("_INSTALL_L53","Por favor, confirme os dados enviados:");
define("_INSTALL_L54","Utilizar conexão persistente?");
define("_INSTALL_L55","Caminho físico do XOOPS Cube (<em>path</em>)");
define("_INSTALL_L56","Caminho virtual do XOOPS Cube (URL)");
define("_INSTALL_L57","Por favor, escreva %s");
define("_INSTALL_L58","Caminho virtual do diretório principal do XOOPS Cube SEM a barra invertida.");
define("_INSTALL_L59","Caminho físico do seu diretório principal do XOOPS Cube SEM a barra invertida.");
define("_INSTALL_L6","Há uma confusão entre a configuração de XOOPS_ROOT_PATH na linha 31 do arquivo mainfile.php e o directoria raiz (root) que nós detectamos.");
define("_INSTALL_L60","Não foi possível abrir o arquivo mainfile.php. Verfique as permissões desse arquivo e tente de novo.");
define("_INSTALL_L61","Não foi possível gravar no arquivo mainfile.php. Entre em contacto com o administrador do sistema para maiores detalhes.");
define("_INSTALL_L62","Os dados da configuração foram gravados corretamente. Clique no botão abaixo para continuar.");
define("_INSTALL_L63","Este prefixo será acrescentado a todas as novas tabelas criadas para evitar conflitos com o banco de dados. Se você ainda não tiver certeza, use o prefixo padrão.");
define("_INSTALL_L64","O nome do banco de dados no servidor. O assistente de instalação tentará criar o banco de dados se ele não existir.");
define("_INSTALL_L65","Nome do utilizador (<q>username</q>) do banco de dados");
define("_INSTALL_L66","Escolha o tipo de banco de dados a ser utilizado");
define("_INSTALL_L67","Endereço do servidor do banco de dados.");
define("_INSTALL_L68","Senha do banco de dados");
define("_INSTALL_L69","Deixe como está, caso não saiba do que se trata.");
define("_INSTALL_L7","A sua configuração:");
define("_INSTALL_L70","Por favor, altere as permissões do arquivo mainfile.php de forma que ele se torne executável pelo servidor (por exemplo: chmod 777 mainfile.php em um servidor UNIX/LINUX, ou verfique as prorpriedades do arquivo e assegure-se que a opção");
define("_INSTALL_L71","Pressione o botão abaixo para prosseguir.");
define("_INSTALL_L72","Os seguintes diretórios devem possuir permissões de leitura e escrita pelo servidor. (por exemplo");
define("_INSTALL_L73","Endereço de e-mail inválido.");
define("_INSTALL_L74","Confirme a senha");
define("_INSTALL_L75","Caminho físico do XOOPS_TRUST_PATH ");
define("_INSTALL_L76","Diretório completo de onde está localizada a pasta XOOPS_TRUST_PATH, sem a barra no final.<br />Essa pasta deverá estar fora do PUBLIC_HTML, e os seus arquivos não deverão ser acessados via Web.");
define("_INSTALL_L8","Foi detectado:");
define("_INSTALL_L80","Introdução");
define("_INSTALL_L81","Verifique as permissões dos arquivos");
define("_INSTALL_L82","Verificando as permissões dos arquivos...");
define("_INSTALL_L83","Não é possível escrever no arquivo %s.");
define("_INSTALL_L84","É possível escrever no arquivo %s.");
define("_INSTALL_L85","Não é possível escrever no diretório %s.");
define("_INSTALL_L86","É possível escrever no diretório %s.");
define("_INSTALL_L87","Não foram detectados erros.");
define("_INSTALL_L88","Gravando as configurações...");
define("_INSTALL_L89","Parâmetros principais");
define("_INSTALL_L9","(em uma plataforma Microsoft, você pode receber este erro mesmo se sua configuração estiver correta. Se este é seu caso, por gentileza pressione o botão abaixo para continuar).");
define("_INSTALL_L90","Configuração Geral");
define("_INSTALL_L91","Confirmar");
define("_INSTALL_L92","Gravar parâmetros");
define("_INSTALL_L93","Modificar parâmetros");
define("_INSTALL_L94","Verificar o caminho e URL");
define("_INSTALL_L95","Não foi possível detectar o caminho físico do diretório (path) onde está o XOOPS.");
define("_INSTALL_L96","Há um conflito entre o caminho físico do diretório (path) detectado e o que foi digitado.");
define("_INSTALL_L97","O <strong>caminho físico</strong> está correto.");
define("_INSTALL_L99","Talvez o <strong>caminho físico</strong> não esteja correto.");
define("_INSTALL_LANG_XOOPS_SALT","Chave de segurança");
define("_INSTALL_LANG_XOOPS_SALT_DESC","A chave de segurança provê uma maior segurança ao sistema. Não é necessário alterar esse valor.");

// mb_http_output("UTF-8");
// mb_internal_encoding("UTF-8");
// mb_language("uni");
header("Content-Type:text/html; charset="._INSTALL_CHARSET);
?>