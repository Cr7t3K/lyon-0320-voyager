<?php

function faqtest()
{

    $content = [
        'title' => ['Quelles sont les meilleures périodes pour partir ?',
            'Quels documents sont nécessaires pour partir ?',
            'Les animaux de compagnie sont-ils admis ?',
            'Vos hôtels proposent-ils des activités de loisirs ?'
        ],
        'apply' => ['Nous vous proposons un large panel de destination de planètes qui vous ravira tout au long de l\'année.',
            'Pour voyager à bord de l\'une de nos navettes spatiales, il faudra vous munir d\'un passeport intergalactique',
            'Nos amis les animaux sont les bienvenus à bord de nos navettes.',
            'Rendez-vous sur notre catalogue pour découvrir toutes les activités proposées.'
        ]

    ];


    $nbr = count($content['title']);

    for ($i = 0; $i < $nbr; $i++) {
        foreach ($content as $k => $v) {

            if ($k == 'title') {
                echo "<section class=\"section\">
                        <div class=\"container\">
                            <div class=\"content is-medium\">
                            <div class=\"box\">
                                <div class=\"box-header\">
                                    <h3>" . ($content[$k][$i]) . "</h3>
                                    <div class=\"toggle-icon-container\">
                                        <i class=\"fas fa-chevron-right\"></i>
                                    </div>
                                </div>";
            } else {
                echo "<div class=\"box-body collapsed\">" . ($content[$k][$i]) . "</div>
                            </div>
                            </div>
                            </div>
                        </section>";
            }
        };
    }

}