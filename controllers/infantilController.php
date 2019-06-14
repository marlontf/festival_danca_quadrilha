<?php  
/**
 * 
 */
class infantilController extends controller
{
	
    public function index()
	{
		if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])) {

		$infantil = new modelInfantil();

		$dados = array
		(
			'info_infantil' 	=> $infantil->listarAll(),
			'info_casamento' 	=> $infantil->listarCasamentos(),
			'info_quadrilha' 	=> $infantil->listarQuadrilhas(),
			'info_marcador' 	=> $infantil->listarMarcador()

		);

		$this->loadTemplate('homeInfantil', $dados);
		
		}else{
			header('Location:'.BASE_URL.'usuario');
		}
	}

	public function quadrilha($id_participante, $id_categoria)
	{
		if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])) {
		$dquadrilha = new modelQuadrilha();
		$dado_quadrilha = $dquadrilha->listarQuadrilhas($id_participante, $id_categoria);
		//verifica se quadrilha não está inserido, se não estiver encaminha consegue inserir notas e acessar form


		if (isset($_POST['evolucao']) && !empty($_POST['evolucao'])) {
			$evolucao 		= $_POST['evolucao'];
			$figurino 		= $_POST['figurino'];
			$animacao 		= $_POST['animacao'];
			$alinhamento	= $_POST['alinhamento'];
			$coreografia 	= $_POST['coreografia'];
			$harmonia 		= $_POST['harmonia'];
			$dquadrilha -> cadastrar($evolucao, $figurino, $animacao, $alinhamento, $coreografia, $harmonia, $id_participante, $id_categoria);
			header('Location:'.BASE_URL.'infantil');
		}

		if (empty($dado_quadrilha)) {
		$this->loadTemplate('apuracaoInfantilQuadrilha');
		}else{
		header('Location:'.BASE_URL.'infantil');
		}

		}else{
			header('Location:'.BASE_URL.'usuario');
		}
	}
	public function casamento($id_participante, $id_categoria)
	{
		if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])) {
		$dcasamento = new modelCasamento();
		$dado_casamento = $dcasamento->listarCasamentos($id_participante, $id_categoria);
		//verifica se quadrilha não está inserido, se não estiver encaminha consegue inserir notas e acessar form

		if (isset($_POST['vest_tradicional']) && !empty($_POST['vest_tradicional'])) {
			$vest_tradicional 		= $_POST['vest_tradicional'];
			$originalidade 			= $_POST['originalidade'];
			$deprec_preconceituoso	= $_POST['deprec_preconceituoso'];
			$dcasamento -> cadastrar($vest_tradicional, $originalidade, $deprec_preconceituoso, $id_participante, $id_categoria);
			header('Location:'.BASE_URL.'infantil');
		}

		if (empty($dado_casamento)) {
		$this->loadTemplate('apuracaoInfantilCasamento');
		}else{
		header('Location:'.BASE_URL.'infantil');
		}

		}else{
			header('Location:'.BASE_URL.'usuario');
		}
	}

	public function marcador($id_participante, $id_categoria)
	{
		if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])) {
		$dmarcador = new modelMarcador();
		$dado_marcador = $dmarcador->listarMarcador($id_participante, $id_categoria);
		//verifica se quadrilha não está inserido, se não estiver encaminha consegue inserir notas e acessar form

		if (isset($_POST['desenvoltura']) && !empty($_POST['desenvoltura'])) {
			$desenvoltura 		= $_POST['desenvoltura'];
			$lideranca 			= $_POST['lideranca'];
			$animacao			= $_POST['animacao'];
			$figurino			= $_POST['figurino'];
			$dmarcador -> cadastrar($desenvoltura, $lideranca, $animacao, $figurino, $id_participante, $id_categoria);
			header('Location:'.BASE_URL.'infantil');
		}

		if (empty($dado_marcador)) {
		$this->loadTemplate('apuracaoInfantilMarcador');
		}else{
		header('Location:'.BASE_URL.'infantil');
		}

		}else{
			header('Location:'.BASE_URL.'usuario');
		}
	}

	public function classificacao()
	{
		$infantil = new modelInfantil();

		$dados = array();
		$categoria = '';
		if (isset($_POST['categoria']) && !empty($_POST['categoria'])) {
			$categoria = $_POST['categoria'];
		}

		if ($categoria == '1') {
		
			$dados = array
				(
					'info_infantil' => $infantil->classificacaoQuadrilha(),
					'val_categoria' => $categoria
				);
		}

		if ($categoria == '2') {
		
			$dados = array
				(
					'info_infantil' => $infantil->classificacaoCasamento(),
					'val_categoria' => $categoria
				);
		}

		if ($categoria == '3') {
		
			$dados = array
				(
					'info_infantil' => $infantil->classificacaoMarcador(),
					'val_categoria' => $categoria
				);
		}

		if ($categoria == '') {
			$dados = array
				(
					'classificacao_quadrilha' => $infantil->classificacaoQuadrilha(),
					'classificacao_casamento' => $infantil->classificacaoCasamento(),
					'classificacao_marcador' => $infantil->classificacaoMarcador(),
				);
		}
		
		$this->loadTemplate('classificacaoInfantil', $dados); 
	}

}
?>