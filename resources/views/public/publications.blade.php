@extends('template.main')

@section('title', 'Publicaciones científicas')

@section('content')

    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="{{ route('public.publications') }}">Publicaciones científicas</a></li>
                <li class="active">Blank page</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-primary">Publicaciones científicas</h1>
                </div><!--end .col -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Atículos en revista</h2>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <div class="panel-group" id="accordion1">
                    {{--<div class="card panel expanded">
                        <div class="card-head" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-1">
                            <header>Curso 1</header>
                            <div class="tools">
                                <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div id="accordion1-1" class="collapse in">
                            <div class="card-body"><p>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                            </div>
                        </div>
                    </div>--}}<!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-1">
                                <header>Año 2015</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-1" class="collapse">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body no-padding">
                                                <ul class="list">
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://www.ncbi.nlm.nih.gov/pubmed/26113021" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    The mobility gap between older men and women: The embodiment of gender
                                                                </p>
                                                                <p>
                                                                    Colombia, Archives Of Gerontology And Geriatrics ISSN: 0167-4943, 2015 vol:61 fasc: 2 págs: 140 - 148, DOI:doi: 10.1016/j.archger.2015.06.005
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> JOSE FERNANDO GOMEZ MONTES, MARIA VICTORIA ZUNZUNEGUI, BEATRIZ EUGENIA ALVARADO LLANO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://bmcgeriatr.biomedcentral.com/articles/10.1186/s12877-015-0083-3" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Social differences associated with the use of psychotropic drugs among men and women aged 65 to 74 years living in the community: the International Mobility in Aging Study (IMIAS).
                                                                </p>
                                                                <p>
                                                                    Inglaterra, Bmc Geriatrics ISSN: 1471-2318, 2015 vol:15 fasc: N/A págs: 83 - 93, DOI:10.1186/s12877-015-0083-3
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> JOSE FERNANDO GOMEZ MONTES, MARIA VICTORIA ZUNZUNEGUI
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielosp.org/pdf/rpsp/v37n4-5/v37n4-5a16.pdf" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    La brecha de género en violencia doméstica en adultos mayores en América Latina: el Estudio IMIAS
                                                                </p>
                                                                <p>
                                                                    Estados Unidos, Revista Panamericana De Salud Pública = Pan American Journal Of Public Health ISSN: 1680-5348, 2015 vol:37 fasc: 4/5 págs: 293 - 300, DOI:
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> DIMITRI TAURINO GUEDES, CARMEN LUCIA CURCIO BORRERO, BEATRIZ EUGENIA ALVARADO LLANO, MARIA VICTORIA ZUNZUNEGUI, RICARDO OLIVEIRA GUERRA
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://www.ncbi.nlm.nih.gov/pubmed/25704920" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Socioeconomic status, social relations and domestic violence (DV) against elderly people in Canada, Albania, Colombia and Brazil
                                                                </p>
                                                                <p>
                                                                    Colombia, Archives Of Gerontology And Geriatrics ISSN: 0167-4943, 2015 vol:60 fasc: 3 págs: 492 - 500, DOI:doi: 10.1016/j.archger.2015.01.010
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> DIMITRI TAURINO GUEDES, CARMEN LUCIA CURCIO BORRERO, BEATRIZ EUGENIA ALVARADO LLANO, MARIA VICTORIA ZUNZUNEGUI, RICARDO OLIVEIRA GUERRA
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://www.ncbi.nlm.nih.gov/pubmed/25809813" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Comprehensive nutritional status in sarco-osteoporotic older fallers
                                                                </p>
                                                                <p>
                                                                    Francia, Journal Of Nutrition, Health & Aging ISSN: 1279-7707, 2015 vol:19 fasc: 4 págs: 474 - 480, DOI:10.1007/s12603-014-0543-z.
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> YA RUTH HUO, PUSHPA SURIYAARACHCHI, JOSE FERNANDO GOMEZ M, CARMEN LUCIA CURCIO BORRERO, GUSTAVO ADOLFO DUQUE NARANJO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://www.ncbi.nlm.nih.gov/pubmed/25512216" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Phenotype of Osteosarcopenia in Older Individuals With a History of Falling
                                                                </p>
                                                                <p>
                                                                    Estados Unidos, Journal Of The American Medical Directors Association ISSN: 1525-8610, 2015 vol:16 fasc: 4 págs: 290 - 295, DOI:10.1016/j.jamda
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> YA RUTH HUO, PUSHPA SURIYAARACHCHI, CARMEN LUCIA CURCIO BORRERO, JOSE FERNANDO GOMEZ M, MANUEL MONTERO ODASSO, GUSTAVO ADOLFO DUQUE NARANJO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!--end .card-body -->
                                        </div><!--end .card -->
                                    </div><!--end .col -->
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-2">
                                <header>Año 2014</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-2" class="collapse">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body no-padding">
                                                <ul class="list">
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://revistas.uis.edu.co/index.php/revistamedicasuis/article/view/4325" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Depresión de aparición tardía y su relación con la demencia vascular del anciano
                                                                </p>
                                                                <p>
                                                                    Colombia, Médicas Uis ISSN: 0121-0319, 2014 vol:27 fasc: 2 págs: 51 - 58, DOI:
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> JOSE FERNANDO GOMEZ MONTES
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://journals.sagepub.com/doi/abs/10.1177/0898264314523448" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Evaluation of the Late Life Disability Instrument (LIDI) In Low Income Older Populations.
                                                                </p>
                                                                <p>
                                                                    Estados Unidos, Journal Of Aging And Health ISSN: 0898-2643, 2014 vol:26 fasc: 3 págs: 495 - 515, DOI:10.1177/0898264314523448
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> JOSE FERNANDO GOMEZ MONTES, CARMEN LUCIA CURCIO BORRERO, BEATRIZ EUGENIA ALVARADO LLANO, MARIA VICTORIA ZUNZUNEGUI
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://bmcgeriatr.biomedcentral.com/articles/10.1186/1471-2318-14-2" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Frailty among rural elderly adults
                                                                </p>
                                                                <p>
                                                                    Inglaterra, Bmc Geriatrics ISSN: 1471-2318, 2014 vol:14 fasc: 2 págs: 1 - 9, DOI: 10.1186/1471-2318-14-2
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> JOSE FERNANDO GOMEZ MONTES, CARMEN LUCIA CURCIO BORRERO, GUDALUPE MARIA HENAO, GUADALUPE MARIA HENAO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!--end .card-body -->
                                        </div><!--end .card -->
                                    </div><!--end .col -->
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-3">
                                <header>Año 2013</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-3" class="collapse">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body no-padding">
                                                <ul class="list">
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://link.springer.com/article/10.1007/s40520-013-0121-y" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Life space assessment scale to assess mobility: validation in Latin American older women an men
                                                                </p>
                                                                <p>
                                                                    Italia, Aging Clinical And Experimental Research ISSN: 1720-8319, 2013 vol:25 fasc: 5 págs: 553 - 560, DOI:10.1007/s40520-013-0121
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> JOSE FERNANDO GOMEZ MONTES, CARMEN LUCIA CURCIO BORRERO, BEATRIZ EUGENIA ALVARADO LLANO, MARIA VICTORIA ZUNZUNEGUI
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://onlinelibrary.wiley.com/doi/10.1111/ggi.12180/full" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Validity and applicability of a video-based animated tool to assess mobility in elderly Latin American populations
                                                                </p>
                                                                <p>
                                                                    Japón, Geriatrics & Gerontology International ISSN: 1444-1586, 2013 vol:14 fasc: 4 págs: 864 - 873, DOI:10.1111/GGI.12180
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> CARMEN LUCIA CURCIO BORRERO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://colombiamedica.univalle.edu.co/index.php/comedica/article/view/1362/2162" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Prevalence of poor self-rated health and associated risk factors among older adults in Cali, Colombia
                                                                </p>
                                                                <p>
                                                                    Colombia, Colombia Medica ISSN: 1657-9534, 2013 vol:44 fasc: 4 págs: 224 - 231, DOI:24892239
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> JOSE MAURICIO OCAMPO, CARMEN LUCIA CURCIO BORRERO, CARLOS REYES ORTIZ, HELMER DE JESUS ZAPATA OSSA
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/scielo.php?pid=S0120-87482013000300003&script=sci_abstract&tlng=es" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Prevalencia de deterioro cognitivo y demencia en mayores de 65 años en una población urbana Colombiana. Manizales
                                                                </p>
                                                                <p>
                                                                    Colombia, Acta Neurológica Colombiana ISSN: 0120-8748, 2013 vol:29 fasc: 3 págs: 141 - 151, DOI:
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> RICARDO DIAZ CABEZAS, FELIPE MARULANDA MEJIA
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://colombiamedica.univalle.edu.co/index.php/comedica/article/view/1181" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Validity and reliability of the Short Physical Performance Battery (SPPB): a pilot study on mobility in the Colombian Andes.
                                                                </p>
                                                                <p>
                                                                    Colombia, Colombia Medica ISSN: 1657-9534, 2013 vol:44 fasc: 3 págs: 165 - 171, DOI:
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> JOSE FERNANDO GOMEZ MONTES, CARMEN LUCIA CURCIO BORRERO, BEATRIZ EUGENIA ALVARADO LLANO, MARIA VICTORIA ZUNZUNEGUI
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.tandfonline.com/doi/abs/10.1080/02701960.2012.699010" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Interdisciplinary collaboration in Gerontology and Geriatrics in Latin America
                                                                </p>
                                                                <p>
                                                                    Canadá, Gerontology & Geriatrics Education ISSN: 0270-1960, 2013 vol:34 fasc: 2 págs: 161 - 175, DOI: 10.1080/02701960.2012.699010
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> JOSE FERNANDO GOMEZ MONTES, CARMEN LUCIA CURCIO BORRERO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://www.dovepress.com/differing-approaches-to-falls-and-fracture-prevention-between-australi-peer-reviewed-article-CIA" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Differing approaches to falls and fracture prevention between Australia and Colombia
                                                                </p>
                                                                <p>
                                                                    Nueva Zelanda, Clinical Interventions In Aging ISSN: 1178-1998, 2013 vol:8 fasc: págs: 61 - 67, DOI:10.2147/CIA.S40221
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> JOSE FERNANDO GOMEZ MONTES, CARMEN LUCIA CURCIO BORRERO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!--end .card-body -->
                                        </div><!--end .card -->
                                    </div><!--end .col -->
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-4">
                                <header>Año 2012</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-4" class="collapse">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body no-padding">
                                                <ul class="list">
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.unisanitas.edu.co/Revista/45/08%20ANCIANOS%20DFN.pdf" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Fragilidad en ancianos colombianos.
                                                                </p>
                                                                <p>
                                                                    Colombia, Revista Medica Sanitas ISSN: 0123-4250, 2012 vol:15 fasc: 4 págs: 22 - 29, DOI:
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> JOSE FERNANDO GOMEZ MONTES, CARMEN LUCIA CURCIO BORRERO, GUDALUPE MARIA HENAO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://www.ncbi.nlm.nih.gov/pubmed/22996789" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Applicability of the MoCA-S test in populations with little education in Colombia
                                                                </p>
                                                                <p>
                                                                    Canadá, International Journal Of Geriatric Psychiatry ISSN: 1099-1166, 2012 vol:28 fasc: 8 págs: 813 - 820, DOI:10.1002/gps.388
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> JOSE FERNANDO GOMEZ MONTES, MARIA VICTORIA ZUNZUNEGUI, BEATRIZ EUGENIA ALVARADO LLANO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/pdf/hpsal/v17n2/v17n2a13.pdf" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Temor a caer en ancianos: controversias en torno a un concepto y a su medición.
                                                                </p>
                                                                <p>
                                                                    Colombia, Hacia La Promoción De La Salud ISSN: 0121-7577, 2012 vol:17 fasc: 2 págs: 186 - 204, DOI:
                                                                </p>
                                                                <p>
                                                                    <strong>Autores:</strong> JOSE FERNANDO GOMEZ MONTES, CARMEN LUCIA CURCIO BORRERO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!--end .card-body -->
                                        </div><!--end .card -->
                                    </div><!--end .col -->
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-5">
                                <header>Año 2011</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-5" class="collapse">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body no-padding">
                                                <ul class="list">
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.acgg.org.co/pdf/revista-25-4.pdf" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Validez convergente y de constructo de la escala de autoeficacia realacionada con caídas (FES)
                                                                </p>
                                                                <p>
                                                                    Colombia, Revista De La Asociación Colombiana De Gerontología Y Geriatría ISSN: 0122-6916, 2011 vol:25 fasc: 4 págs: 1558 - 1569, DOI:
                                                                </p>
                                                                <p>
                                                                    Autores: CARMEN LUCIA CURCIO BORRERO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/scielo.php?script=sci_arttext&pid=S0120-87482011000400002" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Conocimiento de síntomas y factores de riesgo de enfermedad cerebro vascular en una población urbana Colombiana
                                                                </p>
                                                                <p>
                                                                    Colombia, Acta Neurológica Colombiana ISSN: 0120-8748, 2011 vol:27 fasc: 4 págs: 195 - 204, DOI:
                                                                </p>
                                                                <p>
                                                                    Autores: RICARDO DIAZ CABEZAS, MARIO IVAN RUANO RESTREPO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://catalogo.juanncorpas.edu.co/cgi-bin/koha/opac-detail.pl?biblionumber=10663" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Obesidad Sarcopenica y síndrome de apnea del sueño en ancianos.
                                                                </p>
                                                                <p>
                                                                    Colombia, Revista De La Asociación Colombiana De Gerontología Y Geriatría ISSN: 0122-6916, 2011 vol:25 fasc: 3 págs: 1549 - 1557, DOI:
                                                                </p>
                                                                <p>
                                                                    Autores: JOSE FERNANDO GOMEZ MONTES, EDWIN HARVEY ETAYO RUIZ RUIZ
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/scielo.php?script=sci_arttext&pid=S0120-24482011000300002" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Prevalencia y persistencia del insomnio crónico. Estdio Sueca II
                                                                </p>
                                                                <p>
                                                                    Colombia, Acta Médica Colombiana ISSN: 0120-2448, 2011 vol:36 fasc: 3 págs: 119 - 124, DOI:
                                                                </p>
                                                                <p>
                                                                    Autores: RICARDO DIAZ CABEZAS, MARIO IVAN RUANO RESTREPO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://www.ncbi.nlm.nih.gov/pubmed/21623472" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    DIZZINESS AS A GERIATRIC CONDITION AMONG RURAL COMMUNITY-DWELLING OLDER ADULTS
                                                                </p>
                                                                <p>
                                                                    Francia, Journal Of Nutrition, Health & Aging ISSN: 1279-7707, 2011 vol:15 fasc: 6 págs: 490 - 497, DOI:
                                                                </p>
                                                                <p>
                                                                    Autores: JOSE FERNANDO GOMEZ MONTES, CARMEN LUCIA CURCIO BORRERO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/pdf/hpsal/v16n2/v16n2a03.pdf" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    SENTIDO Y PROCESO DEL TEMOR A CAER EN ANCIANOS
                                                                </p>
                                                                <p>
                                                                    Colombia, Hacia La Promoción De La Salud ISSN: 0121-7577, 2011 vol:16 fasc: 2 págs: 32 - 51, DOI:
                                                                </p>
                                                                <p>
                                                                    Autores: CARMEN LUCIA CURCIO BORRERO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/pdf/amc/v36n2/v36n2a06.pdf" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Criptococosis diseminada en anciano con VIH
                                                                </p>
                                                                <p>
                                                                    Colombia, Acta Médica Colombiana ISSN: 0120-2448, 2011 vol:36 fasc: 2 págs: 85 - 89, DOI:
                                                                </p>
                                                                <p>
                                                                    Autores: RICARDO DIAZ CABEZAS, ALFREDO POSADA JARAMILLO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/pdf/amc/v36n1/v36n1a03.pdf" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Dolor crónico nociceptivo y neuropático en población adulta de Manizales, Colombia
                                                                </p>
                                                                <p>
                                                                    Colombia, Acta Médica Colombiana ISSN: 0120-2448, 2011 vol:36 fasc: 1 págs: 10 - 17, DOI:
                                                                </p>
                                                                <p>
                                                                    Autores: RICARDO DIAZ CABEZAS, FELIPE MARULANDA MEJIA
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!--end .card-body -->
                                        </div><!--end .card -->
                                    </div><!--end .col -->
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-6">
                                <header>Año 2010</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-6" class="collapse">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body no-padding">
                                                <ul class="list">
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/pdf/hpsal/v15n1/v15n1a10.pdf" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Investigación y envejecimiento: del dato a la teoría
                                                                </p>
                                                                <p>
                                                                    Colombia, Hacia La Promoción De La Salud ISSN: 0121-7577, 2010 vol:15 fasc: 1 págs: 144 - 166, DOI:
                                                                </p>
                                                                <p>
                                                                    Autores: CARMEN LUCIA CURCIO BORRERO
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!--end .card-body -->
                                        </div><!--end .card -->
                                    </div><!--end .col -->
                                </div>
                            </div>
                        </div><!--end .panel -->
                    </div><!--end .panel-group -->
                </div><!--end .col -->

            </div>

            <hr class="ruler-xxl"/>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Memorias en evento</h2>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <div class="panel-group" id="accordion2">
                    {{--<div class="card panel expanded">
                        <div class="card-head" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-1">
                            <header>Curso 1</header>
                            <div class="tools">
                                <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div id="accordion2-1" class="collapse in">
                            <div class="card-body"><p>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                            </div>
                        </div>
                    </div>--}}<!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-1">
                                <header>Año 2014</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion2-1" class="collapse">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body no-padding">
                                                <ul class="list">
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Congreso : CONGRESO COLOMBIANO DE MEDICINA INTERNA
                                                                CARTAGENA DE INDIAS, desde 2014-08-07 00:00:00.0 - hasta 2014-08-10 00:00:00.0
                                                                Ámbito: Nacional, Tipos de participación: Ponente Magistral
                                                                Institución: Asociación Colombiana De Medicina Interna - Acmi
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Congreso : XI FORO DEL ENVEJECIMIENTO ACTIVO-COMLAT XIX CONGRESO BRASILEÑO DE GERIATRÍA Y GERONTOLOGIA"UNA GENERACIÓN DE ANCIANOS Y LOS DESAFÍOS CONTEMPORÁNEOS"
                                                                Belem, desde 2014-04-29 00:00:00.0 - hasta 2014-05-03 00:00:00.0
                                                                Ámbito: Internacional, Tipos de participación: Ponente Magistral
                                                                Institución: Sociedad Brasileña de Geriatría y Gerontología.
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Congreso : V CONGRESO PANAMERICANO DE GERONTOLOGIA Y GERIATRÍA. XI CONGRESO NACIONAL DE LA ASOCIACIÓN COLOMBIANA DE GERONTOLOGIA Y GERIATRÍA.
                                                                CARTAGENA DE INDIAS, desde 2014-03-26 00:00:00.0 - hasta 2014-03-29 00:00:00.0
                                                                Ámbito: Nacional, Tipos de participación: Ponente Magistral
                                                                Institución: Asociación Colombiana de Geriatría y Gerontología.
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!--end .card-body -->
                                        </div><!--end .card -->
                                    </div><!--end .col -->
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-2">
                                <header>Año 2013</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion2-2" class="collapse">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body no-padding">
                                                <ul class="list">
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Otro : Gerontology Society of America
                                                                NEW ORLEANS, desde 2013-11-20 00:00:00.0 - hasta 2013-11-24 00:00:00.0
                                                                Ámbito: Internacional, Tipos de participación: Ponente
                                                                Institución: Institutes de Recherche en Santé de Canada (IRSC).
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Simposio : Gerontology Society of America
                                                                NEW ORLEANS, desde 2013-11-20 00:00:00.0 - hasta 2013-11-24 00:00:00.0
                                                                Ámbito: Internacional, Tipos de participación: Ponente
                                                                Institución: Institutes de Recherche en Santé de Canada (IRSC).
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Congreso : 20th. IAGG World Congress of Gerontology an Geriatrics
                                                                SEOUL, desde 2013-06-23 00:00:00.0 - hasta 2013-06-27 00:00:00.0
                                                                Ámbito: Internacional, Tipos de participación: Ponente
                                                                Institución: International Association of Gerontology and Geriatrics.
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!--end .card-body -->
                                        </div><!--end .card -->
                                    </div><!--end .col -->
                                </div>
                            </div>
                        </div><!--end .panel -->
                    </div><!--end .panel-group -->
                </div><!--end .col -->

            </div>

        </div><!--end .section-body -->
    </section>


@endsection