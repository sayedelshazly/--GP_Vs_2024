<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')
    l
</head>

<body class="index-page">

    {{--Header --}}
    @include('layouts.Front.header')

    <main class="main">

        <!-- Hero Section -->
        @include('layouts.Front.roadmap_info')

        <section style="background-color: #F0F2F5;">
            <div class="container py-5">
                <div class="main-timeline">
                    <div class="timeline left">
                        <div class="card">
                            <div class="card-body p-4">
                                <h3>2017</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum
                                    perfecto
                                    mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit
                                    voluptua
                                    dignissim per, habeo iusto primis ea eam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline right">
                        <div class="card">
                            <div class="card-body p-4">
                                <h3>2016</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum
                                    perfecto
                                    mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit
                                    voluptua
                                    dignissim per, habeo iusto primis ea eam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline left">
                        <div class="card">
                            <div class="card-body p-4">
                                <h3>2015</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum
                                    perfecto
                                    mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit
                                    voluptua
                                    dignissim per, habeo iusto primis ea eam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline right">
                        <div class="card">
                            <div class="card-body p-4">
                                <h3>2012</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum
                                    perfecto
                                    mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit
                                    voluptua
                                    dignissim per, habeo iusto primis ea eam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline left">
                        <div class="card">
                            <div class="card-body p-4">
                                <h3>2011</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum
                                    perfecto
                                    mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit
                                    voluptua
                                    dignissim per, habeo iusto primis ea eam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline right">
                        <div class="card">
                            <div class="card-body p-4">
                                <h3>2007</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum
                                    perfecto
                                    mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit
                                    voluptua
                                    dignissim per, habeo iusto primis ea eam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        @include('layouts.Front.contact')

    </main>

    {{--footer--}}
    @include('layouts.Front.footer')
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    {{--javascribt--}}
    @include('layouts.Front.script')

</body>

</html>