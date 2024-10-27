<?php
    include_once('./templates/tag.php');
    include_once('./utils/render-template.php');
    $projects = [
        [
            'name' => 'Project 1',
            'src' => '',
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
            'src' => '',
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
            'src' => '',
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
            'src' => '',
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
            'src' => '',
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
            'src' => '',
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
            'src' => '',
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
        <span class="card-project--img"></span>

        <span class="card-project--area-description">
            <div class="card-project--info">
                <h3 class="card-project--title title-sm">Title</h3>
                <p class="card-project--description font-text-sm">
                    Lorem ipsum dolor sit amet consectetetur. Viverra sed laoreet eu ornare.
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