<?php
if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || 
   $_SERVER['HTTPS'] == 1) ||  
   isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&   
   $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'))
{
   $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   header('HTTP/1.1 301 Moved Permanently');
   header('Location: ' . $redirect);
   exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br" class="no-js">
<head>
<link rel="shortcut icon" type="image/png" href="https://i.imgur.com/fx8Teft.png">
    <link rel="shortcut icon" href="https://i.imgur.com/fx8Teft.png">
    <link rel="fluid-icon" type="image/png" href="https://i.imgur.com/fx8Teft.png">
    <link rel="icon" href="https://i.imgur.com/fx8Teft.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escola de Missões Zoe</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							<a href="/">
								<img class="header-logo-image" src="https://i.imgur.com/Yb3zG4U.png" alt="Logo" width="200" height="200" >
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">Escola de Missões Zoe</h1>
	                        <p class="hero-paragraph">As inscrições para a Escola de Missões Zoe, Já estão abertas, Não perca tempo e venha fazer Missões</p>
	                        <div class="hero-cta"><a class="button button-primary" href="https://api.whatsapp.com/send?phone=554196038320">Fazer Inscrição</a><a class="button" href="https://api.whatsapp.com/send?phone=5541999353276">Entrar em Contato</a></div>
						</div>
						<div class="hero-figure anime-element">
							<svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;" />
							</svg>
							<div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
							<div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
							<div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
							<div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
							<div class="hero-figure-box hero-figure-box-05"></div>
							<div class="hero-figure-box hero-figure-box-06"></div>
							<div class="hero-figure-box hero-figure-box-07"></div>
							<div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
							<div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
							<div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
						</div>
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="container">
					<div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="https://i.imgur.com/7F1bd1l.jpg" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24">Louvor e Adoração</h4>
                                    <p class="text-sm mb-0"> </p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="https://i.imgur.com/nvI2i12.png" alt="Feature 02">
                                    </div>
                                    <h4 class="feature-title mt-24">Desenvolvimento dos Dons</h4>
                                    <p class="text-sm mb-0"> </p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="https://i.imgur.com/ZLLCLF3.png" alt="Feature 03">
                                    </div>
                                    <h4 class="feature-title mt-24">Evangelismo Infantil</h4>
                                    <p class="text-sm mb-0"> </p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="https://i.imgur.com/AfyYZYT.png" alt="Feature 04">
                                    </div>
                                    <h4 class="feature-title mt-24">Evangelismo Criativo</h4>
                                    <p class="text-sm mb-0"> </p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="https://i.imgur.com/0ML1ifa.png" alt="Feature 05">
                                    </div>
                                    <h4 class="feature-title mt-24">Evangelimos Através do Esporte</h4>
                                    <p class="text-sm mb-0"> </p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="https://i.imgur.com/GUBbExI.png" alt="Feature 05">
                                    </div>
                                    <h4 class="feature-title mt-24">e Muito Mais!</h4>
                                    <p class="text-sm mb-0"> </p>
                                </div>
                            </div>
					
                        </div>
                    </div>
                </div>
            </section>

			<section class="cta section">
				<div class="container">
					<div class="cta-inner section-inner">
						<h3 class="section-title mt-0">Faça Missões! Entre em contato agora mesmo!</h3>
						<div class="cta-cta">
							<a class="button button-primary button-wide-mobile" href="https://api.whatsapp.com/send?phone=554196038320">Whatsapp</a>
						</div>
					</div>
				</div>
			</section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
						<a href="/">
							<img class="header-logo-image" src="https://i.imgur.com/Yb3zG4U.png" alt="Logo" width="200" height="200" >
						</a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Conheça</a>
                        </li>
                        <li>
                            <a href="#">Saiba mais</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Ajuda</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#fb625c"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#fb625c"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#fb625c"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2019 Escola de Missões Zoe, Todos os Direitos Reservados.</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="/main.min.js"></script>
</body>
</html>
