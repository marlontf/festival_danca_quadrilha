<?php  
/**
 * 
 */
class participanteController extends controller
{
	
	public function index()
	{
		if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])) {

			$participante 	 	= new modelParticipante();
			$mensagem 			= "";
			if (isset($_POST['nome']) && !empty($_POST['nome'])) {
				$nome 			= $_POST['nome'];
				$id_categoria 	= $_POST['id_categoria'];
				$participante 	->cadastrar($id_categoria, $nome);
				$mensagem 		= "Participante Cadastrado com sucesso!";
			}

			$dados = array
			(
				'info_categoria' => $participante->categoria(),
				'mensagem'		 => $mensagem
			);
			$this->loadTemplate("cadastroParticipantes", $dados);

		}else{
			header('Location:'.BASE_URL.'usuario');
		}
	}
}
?>