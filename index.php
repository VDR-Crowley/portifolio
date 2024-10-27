<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portifolio Vando</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,700;1,700&family=Inconsolata:wdth,wght@50..200,200..900&family=Maven+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="theme/reset.css" />
    <link rel="stylesheet" href="theme/variables.css" />
    <link rel="stylesheet" href="theme/global.css" />

    <link rel="stylesheet" href="styles/home.css" />
    <link rel="stylesheet" href="components/projects/projects.css" />
    <link rel="stylesheet" href="styles/tag.css" />
    <link rel="stylesheet" href="components/social-button/social-button.css" />
</head>
<body class="background-dark">
    <?php
        include_once('./templates/tag.php');
        include_once('./utils/render-template.php');
        $user = [
            "name" => "Vando dos Reis",
            "skills" => [
                [
                    'name' => 'GitHub',
                    'size' => 'md',
                    'background' => 'green',
                    'color' => 'black',
                ],
                [
                    'name' => 'PHP',
                    'size' => 'md',
                    'background' => 'purble',
                    'color' => 'black',
                ],
                [
                    'name' => 'CSS',
                    'size' => 'md',
                    'background' => 'blue',
                    'color' => 'black',
                ],
                [
                    'name' => 'HTML',
                    'size' => 'md',
                    'background' => 'red',
                    'color' => 'black',
                ],
                [
                    'name' => 'Javascript',
                    'size' => 'md',
                    'background' => 'yellow',
                    'color' => 'black',
                ],
            ],
        ];
    ?>
    <header class="header">
        <div class="container">
            <div class="area-infos">

                <div class="area-infos--photo-container">
                    <div class="react-logo"></div>
                    <div class="area-infos--photo">
                        <div class="container-img">
                            <img src="/assets/images/me.jpg" alt="Foto do Vando"></img>
                        </div>
                    </div>
                </div>
                <div class="area-infos--me">
                    <h4 class="subtitle">Hello World! Meu nome é <span class="text-red"><?= $user['name'] ?></span> e sou</h4>
                    <h1 class="title title-lg">Desenvolvedor PHP</h1>
                    <p class="description font-text-sm">
                        Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da
                        minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.
                    </p>
                </div>
            </div>
            <div class="group-tags">
                <?php foreach ($user["skills"] as $skill) : ?>
                    <?= renderTemplate(getTemplateTag(), $skill) ?>
                <?php endforeach; ?>
            </div>
        </div>
    </header>

    <main>
        <section id="projects" aria-labelledby="section-title">
            <div class="container">
                <div class="projects-title-container">
                    <h1 id="section-title" class="subtitle text-red">Meu trabalho</h1>
                    <h3 class="title-md">Veja os projetos em destaque</h3>
                </div>
               <div class="projects-container">
                   <?php include_once('./components/projects/index.php') ?>
               </div>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <div class="contact-title-container">
                    <h1 id="section-title-contact" class="subtitle text-purble">Contato</h1>
                    <h3 class="title-md">Gostou do meu trabalho? </h3>
                    <p class="font-text-md">Entre em contato ou acompanhe as minhas redes sociais!</p>
                </div>
                <div class="contact-social-media-container">
                    <?php include_once('./components/social-button/index.php') ?>
                </div>
            </div>
        </section>

    </main>

    <footer id="footer">
        <div class="container">
            <span class="font-text-sm">© Copyright <?=date('Y') ?>.</span>
        </div>
    </footer>
</body>
</html>