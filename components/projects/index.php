<?php
    include_once('./templates/tag.php');
    include_once('./utils/render-template.php');
    $projects = [
        [
            'name' => 'Project 1',
            'src' => '../../assets/images/projects/image.svg',
            'description' => 'Lorem ipsum dolor sit amet consectetetur. Viverra sed laoreet eu ornare.',
            'stack' => [
                [
                    'name' => 'PHP',
                    'size' => 'sm',
                    'background' => 'purble',
                    'color' => 'black',
                ],
                [
                    'name' => 'CSS',
                    'size' => 'sm',
                    'background' => 'blue',
                    'color' => 'black',
                ],
                [
                    'name' => 'HTML',
                    'size' => 'sm',
                    'background' => 'red',
                    'color' => 'black',
                ],
                [
                    'name' => 'Javascript',
                    'size' => 'sm',
                    'background' => 'yellow',
                    'color' => 'black',
                ],
            ]
        ],
        [
            'name' => 'Project 2',
            'src' => '../../assets/images/projects/image-1.svg',
            'description' => 'Lorem ipsum dolor sit amet consectetetur. Viverra sed laoreet eu ornare.',
            'stack' => [
                [
                    'name' => 'PHP',
                    'size' => 'sm',
                    'background' => 'purble',
                    'color' => 'black',
                ],
                [
                    'name' => 'CSS',
                    'size' => 'sm',
                    'background' => 'blue',
                    'color' => 'black',
                ],
                [
                    'name' => 'HTML',
                    'size' => 'sm',
                    'background' => 'red',
                    'color' => 'black',
                ],
                [
                    'name' => 'Javascript',
                    'size' => 'sm',
                    'background' => 'yellow',
                    'color' => 'black',
                ],
            ]
        ],
        [
            'name' => 'Project 3',
            'src' => '../../assets/images/projects/image-2.svg',
            'description' => 'Lorem ipsum dolor sit amet consectetetur. Viverra sed laoreet eu ornare.',
            'stack' => [
                [
                    'name' => 'PHP',
                    'size' => 'sm',
                    'background' => 'purble',
                    'color' => 'black',
                ],
                [
                    'name' => 'CSS',
                    'size' => 'sm',
                    'background' => 'blue',
                    'color' => 'black',
                ],
                [
                    'name' => 'HTML',
                    'size' => 'sm',
                    'background' => 'red',
                    'color' => 'black',
                ],
                [
                    'name' => 'Javascript',
                    'size' => 'sm',
                    'background' => 'yellow',
                    'color' => 'black',
                ],
            ]
        ],
        [
            'name' => 'Project 4',
            'src' => '../../assets/images/projects/image-3.png',
            'description' => 'Lorem ipsum dolor sit amet consectetetur. Viverra sed laoreet eu ornare.',
            'stack' => [
                [
                    'name' => 'PHP',
                    'size' => 'sm',
                    'background' => 'purble',
                    'color' => 'black',
                ],
                [
                    'name' => 'CSS',
                    'size' => 'sm',
                    'background' => 'blue',
                    'color' => 'black',
                ],
                [
                    'name' => 'HTML',
                    'size' => 'sm',
                    'background' => 'red',
                    'color' => 'black',
                ],
                [
                    'name' => 'Javascript',
                    'size' => 'sm',
                    'background' => 'yellow',
                    'color' => 'black',
                ],
            ]
        ],
        [
            'name' => 'Project 5',
            'src' => '../../assets/images/projects/Thumbnail_Project-04.svg',
            'description' => 'Lorem ipsum dolor sit amet consectetetur. Viverra sed laoreet eu ornare.',
            'stack' => [
                [
                    'name' => 'PHP',
                    'size' => 'sm',
                    'background' => 'purble',
                    'color' => 'black',
                ],
                [
                    'name' => 'CSS',
                    'size' => 'sm',
                    'background' => 'blue',
                    'color' => 'black',
                ],
                [
                    'name' => 'HTML',
                    'size' => 'sm',
                    'background' => 'red',
                    'color' => 'black',
                ],
                [
                    'name' => 'Javascript',
                    'size' => 'sm',
                    'background' => 'yellow',
                    'color' => 'black',
                ],
            ]
        ],
        [
            'name' => 'Project 6',
            'src' => '../../assets/images/projects/Thumbnail_Project-05.svg',
            'description' => 'Lorem ipsum dolor sit amet consectetetur. Viverra sed laoreet eu ornare.',
            'stack' => [
                [
                    'name' => 'PHP',
                    'size' => 'sm',
                    'background' => 'purble',
                    'color' => 'black',
                ],
                [
                    'name' => 'CSS',
                    'size' => 'sm',
                    'background' => 'blue',
                    'color' => 'black',
                ],
                [
                    'name' => 'HTML',
                    'size' => 'sm',
                    'background' => 'red',
                    'color' => 'black',
                ],
                [
                    'name' => 'Javascript',
                    'size' => 'sm',
                    'background' => 'yellow',
                    'color' => 'black',
                ],
            ]
        ],
        [
            'name' => 'Project 6',
            'src' => '../../assets/images/projects/Thumbnail_Project-06.svg',
            'description' => 'Lorem ipsum dolor sit amet consectetetur. Viverra sed laoreet eu ornare.',
            'stack' => [
                [
                    'name' => 'PHP',
                    'size' => 'sm',
                    'background' => 'purble',
                    'color' => 'black',
                ],
                [
                    'name' => 'CSS',
                    'size' => 'sm',
                    'background' => 'blue',
                    'color' => 'black',
                ],
                [
                    'name' => 'HTML',
                    'size' => 'sm',
                    'background' => 'red',
                    'color' => 'black',
                ],
                [
                    'name' => 'Javascript',
                    'size' => 'sm',
                    'background' => 'yellow',
                    'color' => 'black',
                ],
            ]
        ],
    ]
?>

<?php foreach ($projects as $project) : ?>
    <a href="#" class="card-project">
        <span class="card-project--img">
            <img src="<?php echo $project['src'];?>" alt="Print do projeto <?php echo $project['name'];?>" />
        </span>

        <span class="card-project--area-description">
            <div class="card-project--info">
                <h3 class="card-project--title title-sm"><?= $project['name'] ?></h3>
                <p class="card-project--description font-text-sm">
                    <?= $project['description'] ?>
                </p>
            </div>

            <div class="card-project--group-tags">
                <?php foreach ($project['stack'] as $stack): ?>
                    <?=renderTemplate(getTemplateTag(), $stack)?>
                <?php endforeach; ?>
            </div>
        </span>
    </a>
<?php endforeach; ?>