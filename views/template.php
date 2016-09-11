<!-- Tudo que for fixo fica no template!-->
<html>
	<head>
		<title>Site Institucional</title>
		<link rel="stylesheet" href="/assets/css/template.css" />
	</head>
	<body>
		<div class="topo">
                    <div class="topo1"></div>
                    <div class="banner"></div>
		</div>
		<div class="menu">
                    <ul>
                        <!-- home é representado pelo  a /!-->
                        <a href="/"><li>HOME</li></a>
                        <a href="/portfolio"><li>PORTFOLIO</li></a>
                        <a href="/sobre"><li>SOBRE</li></a>
                        <a href="/servicos"><li>SERVIÇOS</li></a>
                        <a href="/contato"><li>CONTATO</li></a>
                    </ul>
		</div>
             <!-- tudo  o que é dinamico!-->
		<div class="container">
                    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>
		<div class="rodape"></div>
	</body>
</html>