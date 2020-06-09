<?php include('_include/_header.php');
include('_include/_navbar.php'); ?>

<!--                FAQ                    -->


<section class="hero is-primary has-background-pink">
    <div class="hero-body">
        <div class="columns">
            <div class="column is-12">
                <div class="container content">
                    <i class="fas fa-question-circle fa-7x"></i>
                    <h1 class="title">Foire aux Questions</h1>
                    <h3 class="subtitle faq-sub">
                        Tout ce que vous devez savoir avant de partir vers les étoiles !
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>


<!--         Loop content for FAQ           -->
<link rel='stylesheet' href='https://unpkg.com/bulma@0.7.5/css/bulma.min.css'>
<?php
include('loopFaq.php');
faqtest();
?>





<?php include('_include/_footer.php') ?>

