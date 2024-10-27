<?php
    echo "Social Button";
    $social_media = [
        [
            'name' => 'LinkedIn',
            "icon" => "../../assets/icons/LinkedinLogo.svg",
            "link" => "https://www.facebook.com/",
            "alt" => "LinkedIn Logo"

        ],
        [
            'name' => 'Instagram',
            "icon" => "../../assets/icons/InstagramLogo.svg",
            "link" => "https://www.instagram.com/",
            "alt" => "Instagram Logo"

        ],
        [
            'name' => 'GitHub',
            "icon" => "../../assets/icons/GitHub.svg",
            "link" => "https://www.github.com/",
            "alt" => "Github Logo"

        ],
        [
            'name' => 'E-mail',
            "icon" => "../../assets/icons/EnvelopeSimple.svg",
            "link" => "https://www.gmail.com/",
            "alt" => "Icone Envelope"

        ],
    ]
?>
<?php foreach ($social_media as $social) : ?>
    <a href="<?= $social['link'] ?>" class="social-button">
        <img class="social-button--icon-media" src="<?= $social['icon'] ?>" alt="<?= $social['alt'] ?>" />
        <span class="social-button--text font-text-md"><?= $social['name'] ?></span>
        <img class="social-button--icon-arrow" src="../../assets/icons/ArrowUpRight.svg" alt="Seta inclinada para a esquerda" />
    </a>
<?php endforeach; ?>
