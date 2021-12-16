<!DOCTYPE html>
<html lang="pt-BR">
	<?php 
		require_once __DIR__.'/../head'._INDEX; 
	?>
	<body>
		<style type="text/css" media="screen"> .hide{ display: none; } .msg{width: 100%; position: relative; } .showMsg{position: fixed; right: 1em; top: 4em; width: 100%; max-width: 280px; z-index: 999; } .mensagem{width: 100%; max-width: 100%; margin: 0 auto; border-radius: .5em; padding-top: 1em; padding-right: 1em; padding-bottom: 1em; padding-left: 1em; } .erro{background-color: rgba(255,0,0,.6); color: rgba(255,255,255, 1); } .sucesso{background-color: rgba(0,200,100,1); color: rgba(255,255,255, 1); } .atencao{background-color: rgba(253, 213,0,1); color: rgba(0,0,0, 1); } </style> <div class="msg"> <sapn class="showMsg animate__animated hide"  id="showMsg"> <div class="msgText mensagem"> </div> </sapn> </div> 
		<?php
			require_once __DIR__.'/main'._INDEX; 
		?>
	</body>
</html>