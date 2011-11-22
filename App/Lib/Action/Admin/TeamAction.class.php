<?php
	class TeamAction extends Action{
		public function show(){
			if(!isset($_SESSION['account'])){
			$this->redirect('Index/login');	
		}else{
			$login="<a href='__APP__/Admin/Quit/index'><div id='quit'>退出</div></a>";
			$others=M('others');
			$action="__APP__/Admin/Team/edit";
			$contents=$others->where('TypeName="team"')->getField('Content');
			$this->assign('login',$login);
			$this->assign('action',$action);
			$this->assign('contents',$contents);
			$this->display('Public:other');
		}
	}
		public function edit(){
			if(!isset($_SESSION['account'])){
			$this->redirect('Index/login');	
		}else{
			$others=M('others');
			$contents['TypeName']="team";
			$contents['Content']=$_POST['editorValue'];
			$others->where('TypeName="Team"')->save($contents);
			$this->display('Index:index');
		}
	}
	}
?>
