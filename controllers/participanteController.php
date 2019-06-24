<?php  
/**
 * 
 */
class participanteController extends controller
{
	
	public function index()
	{
		if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])) {

		$user = explode('-', $_SESSION['LOGIN']);
		//verifica as permissões do usuario
		if ($user[3] == 'comissao') {
			$participante 	 	= new modelParticipante();
			$mensagem 			= "";
			if (isset($_POST['nome']) && !empty($_POST['nome'])) {
				$nome 			= utf8_decode($_POST['nome']);
				$responsavel 	= utf8_decode($_POST['responsavel']);
				$id_categoria 	= $_POST['id_categoria'];
				$participante 	->cadastrar($id_categoria, $nome, $responsavel);
				$mensagem 		= "1";
			}

			$dados = array
			(
				'info_categoria' => $participante->categoria(),
				'mensagem'		 => $mensagem
			);
			$this->loadTemplate("cadastroParticipantes", $dados);
		}else{
			echo "Não tem permissão de acesso";
		}
		}else{
			header('Location:'.BASE_URL.'usuario');
		}
	}

	public function listar()
	{
		if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])) {

		$user = explode('-', $_SESSION['LOGIN']);
		//verifica as permissões do usuario
		if ($user[3] == 'comissao') {
		$participante = new modelParticipante();
		if (isset($_POST['input_id_participante']) && !empty($_POST['input_id_participante'])) {
		$id_participante = $_POST['input_id_participante'];
		$participante->excluir($id_participante);
		}
		$dados = array
		(
			'info_part' => $participante->participanteAll() 
		);

		$this->loadTemplate("listarParticipantes", $dados);
		}else{
			echo "não tem permissão de acesso";
		}
		}else{
			header('Location:'.BASE_URL.'usuario');
		}
	}

	public function editar($id_participante)
	{
		if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])) {

		$user = explode('-', $_SESSION['LOGIN']);
		//verifica as permissões do usuario
		if ($user[3] == 'comissao') {
			
		$participante 	= new modelParticipante();

		$mensagem 			= "";

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome 			= utf8_decode($_POST['nome']);
			$responsavel 	= utf8_decode($_POST['responsavel']);
			$id_categoria 	= $_POST['id_categoria'];
			$participante 	->alterar($id_categoria, $nome, $responsavel, $id_participante);
			$mensagem 		= "1";
		}

		$dados = array
		(
			'info_categoria' 	=> $participante->categoria(),
			'info_participante' => $participante->participante($id_participante),
			'mensagem' 			=> $mensagem, 
		);

		$this->loadTemplate("editarParticipante", $dados);
		}else{
			echo "não tem permissão de acesso";
		}

		}else{
			header('Location:'.BASE_URL.'usuario');
		}
	}

	public function excluir($id_participante)
	{
		if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])) {

		$user = explode('-', $_SESSION['LOGIN']);
		//verifica as permissões do usuario
		if ($user[3] == 'comissao') {
		$participante = new modelParticipante();

		$participante->excluir($id_participante);

		}else{
			echo "não tem permissão de acesso";
		}
		}else{
			header('Location:'.BASE_URL.'usuario');
		}
	}
}
?>