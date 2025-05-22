<!-- Carrossel de Banners -->
<div class="container mt-5">
    <div id="carrosselViveiro" class="carousel slide rounded shadow-lg overflow-hidden" data-bs-ride="carousel">

        <!-- Indicadores -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carrosselViveiro" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carrosselViveiro" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carrosselViveiro" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/banner.png" class="d-block w-100 banner-img" alt="Suculentas">
                <div class="carousel-caption">
                    <h5>Encante-se com nossas Suculentas</h5>
                    <p>Beleza e praticidade em plantas perfeitas para qualquer ambiente.</p>
                    <a href="contato" class="btn btn-primary btn-lg">Entrar em contato</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imagens/banner2.png" class="d-block w-100 banner-img" alt="Cactos">
                <div class="carousel-caption">
                    <h5>Conheça nossos Cactos</h5>
                    <p>Fáceis de cuidar e cheios de personalidade para sua casa.</p>
                    <a href="contato" class="btn btn-primary btn-lg">Entrar em contato</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imagens/banner4.png" class="d-block w-100 banner-img" alt="Orquídeas">
                <div class="carousel-caption">
                    <h5>Orquídeas para encantar</h5>
                    <p>Elegância natural em cada detalhe para seus ambientes.</p>
                    <a href="contato" class="btn btn-primary btn-lg">Entrar em contato</a>
                </div>
            </div>
        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carrosselViveiro" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carrosselViveiro" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
</div>

<!---------------------------Seçao Destaque ------------------->
<div class="container py-5">
    <h2 class="text-center mb-4">Plantas mais Requisitadas em nosso Viveiro</h2>

    <div class="text-center mb-4">
        <button class="btn btn-outline-success mx-2 filter-btn active" data-filter="suculenta">Suculentas</button>
        <button class="btn btn-outline-success mx-2 filter-btn" data-filter="cacto">Cactos</button>
        <button class="btn btn-outline-success mx-2 filter-btn" data-filter="orquidea">Orquídeas</button>
    </div>

    <div class="row g-4">
        <!-- Cards de Suculentas -->
        <div class="col-sm-6 col-md-4 suculenta">
            <div class="card h-100 shadow-sm border-0">
                <img src="<?= $suculentas['roseta-azul']->imagem ?>" class="card-img-top" alt="Suculenta Jade">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= $suculentas['roseta-azul']->name ?></h5>
                    <p class="card-text">
                        Popularmente chamada de Roseta Azul, essa suculenta se destaca pelas folhas azuladas com bordas avermelhadas, formando uma roseta simétrica e elegante. Ideal para quem busca beleza e resistência em um único arranjo.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 suculenta">
            <div class="card h-100 shadow-sm border-0">
                <img src="<?= $suculentas['diamante']->imagem ?>" class="card-img-top" alt="Suculenta Jade">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= $suculentas['diamante']->name ?></h5>
                    <p class="card-text">
                        A charmosa suculenta Diamante, com suas folhas rosadas e compactas que brilham como pedras preciosas. Perfeita para dar um toque único e delicado à sua decoração!
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 suculenta">
            <div class="card h-100 shadow-sm border-0">
                <img src="<?= $suculentas['rosinha-de-pedra']->imagem ?>" class="card-img-top" alt="Suculenta Jade">
                <div class="card-body text-center">
                    <h5 class="card-title"> <?= $suculentas['rosinha-de-pedra']->name ?></h5>
                    <p class="card-text">
                        Conhecida popularmente como Rosinha-de-Pedra, essa suculenta encanta por suas rosetas delicadas que lembram pequenas flores esculpidas. Perfeita para composições elegantes e ambientes com um toque de charme natural.

                    </p>
                </div>
            </div>
        </div>

        <!-- Cards de Cactos -->
        <div class="col-sm-6 col-md-4 cacto" style="display: none;">
            <div class="card h-100 shadow-sm border-0">
                <img src="imagens/cacto1.png" class="card-img-top" alt="Mandacaru">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= $cactos['mandacaru-azul']->name ?>
                    </h5>
                    <p class="card-text">
                        É um cacto robusto e imponente, com coloração azulada que destaca sua beleza única. Muito resistente, é símbolo da caatinga e traz um charme rústico e moderno para qualquer ambiente.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 cacto" style="display: none;">
            <div class="card h-100 shadow-sm border-0">
                <img src="imagens/cacto2.png" class="card-img-top" alt="Mandacaru">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= $cactos['orelha-mickey']->name ?> </h5>
                    <p class="card-text">
                        A divertida e charmosa Orelha do Mickey, com suas “orelhas” arredondadas cobertas por pequenas manchas que parecem luvas de espuma. Fácil de cuidar, é perfeita para quem quer um toque divertido e moderno na decoração.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 cacto" style="display: none;">
            <div class="card h-100 shadow-sm border-0">
                <img src="imagens/cacto3.png" class="card-img-top" alt="Mandacaru">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= $cactos['velho-peru']->name ?></h5>
                    <p class="card-text">
                        Conhecido como Cacto Velho do Peru, impressiona com seus longos pelos brancos que parecem uma barba envelhecida, conferindo um charme rústico e único. Resistente e elegante, é perfeito para quem busca uma planta exótica e cheia de personalidade.
                    </p>
                </div>
            </div>
        </div>

        <!-- Cards de Orquídeas -->
        <div class="col-sm-6 col-md-4 orquidea" style="display: none;">
            <div class="card h-100 shadow-sm border-0">
                <img src="<?= $orquideas['borboleta']->imagem ?>" class="card-img-top" alt="Phalaenopsis">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= $orquideas['borboleta']->name ?></h5>
                    <p class="card-text">
                        Conhecida como Orquídea Borboleta, encanta com suas flores delicadas e elegantes que lembram asas em voo. De fácil cultivo e longa floração, é ideal para trazer sofisticação e cor a qualquer ambiente.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 orquidea" style="display: none;">
            <div class="card h-100 shadow-sm border-0">
                <img src="<?= $orquideas['phalaenopsis']->imagem ?>" class="card-img-top" alt="Phalaenopsis">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= $orquideas['phalaenopsis']->name ?></h5>
                    <p class="card-text">É sinônimo de delicadeza e beleza exótica. Suas flores vibrantes e elegantes transformam qualquer espaço, sendo perfeitas para quem deseja um toque de elegância natural o ano todo.</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 orquidea" style="display: none;">
            <div class="card h-100 shadow-sm border-0">
                <img src="<?= $orquideas['cattleya-mendelii-dombrain']->imagem ?>" class="card-img-top" alt="Phalaenopsis">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= $orquideas['cattleya-mendelii-dombrain']->name ?></h5>
                    <p class="card-text">É uma orquídea exuberante, conhecida por suas flores grandes, perfumadas e de cores suaves que exalam elegância. Ideal para colecionadores e amantes da natureza, ela transforma qualquer ambiente com sua presença nobre e delicada.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const buttons = document.querySelectorAll(".filter-btn");
    const cards = document.querySelectorAll(".col-sm-6.col-md-4");

    buttons.forEach(btn => {
        btn.addEventListener("click", () => {
            const filter = btn.getAttribute("data-filter");

            cards.forEach(card => {
                card.style.display = card.classList.contains(filter) ? "block" : "none";
            });

            buttons.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");
        });
    });
</script>