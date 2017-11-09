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
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-7">
                                <header>Año 2016</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-7" class="collapse">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body no-padding">
                                                <ul class="list">
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://bmjopen.bmj.com/lookup/doi/10.1136/bmjopen-2016-012339" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Guedes DT, Vafaei A, Alvarado BE, Curcio CL, Guralnik JM, Zunzunegui MV, et al. Experiences of violence across life course and its effects on mobility among participants in the International Mobility in Aging Study. BMJ Open [Internet]. 2016 Oct 13;6(10):e012339. Available from: http://bmjopen.bmj.com/lookup/doi/10.1136/bmjopen-2016-012339
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://www.hindawi.com/journals/cggr/2016/7910205/" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Gomez F, Corchuelo J, Curcio C-L, Calzada M-T, Mendez F. SABE Colombia: Survey on Health, Well-Being, and Aging in Colombia—Study Design and Protocol. Curr Gerontol Geriatr Res [Internet]. 2016 Nov 13;2016:1–7. Available from: https://www.hindawi.com/journals/cggr/2016/7910205/
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://search.proquest.com/openview/28146ba775ecccd1df1f4f45534dfb12/1?pq-origsite=gscholar&cbl=35973" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Doulougou B, Gomez F, Alvarado B, Guerra R, Ylli A, Guralnik J, et al. Factors associated with hypertension prevalence, awareness, treatment and control among participants in the International Mobility in Aging Study (IMIAS). J Hum Hypertens [Internet]. 2016;30:112–9. Available from: https://search.proquest.com/openview/28146ba775ecccd1df1f4f45534dfb12/1?pq-origsite=gscholar&cbl=35973
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.ncbi.nlm.nih.gov/pubmed/27327236" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Auais M, Alvarado BE, Curcio C-L, Garcia A, Ylli A, Deshpande N. Fear of falling as a risk factor of mobility disability in older people at five diverse sites of the IMIAS study. Arch Gerontol Geriatr [Internet]. 2016 Sep;66:147–53. Available from: http://www.ncbi.nlm.nih.gov/pubmed/27327236
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.sciencedirect.com/science/article/pii/S0167494316300668" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Phenotype of sarcopenic obesity in older individuals with a history of falling. Arch Gerontol Geriatr [Internet]. 2016 Jul 1 [cited 2017 Sep 13];65:255–9. Available from: http://www.sciencedirect.com/science/article/pii/S0167494316300668
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.ncbi.nlm.nih.gov/pubmed/27354077" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Bélanger E, Ahmed T, Vafaei A, Curcio CL, Phillips SP, Zunzunegui MV. Sources of social support associated with health and quality of life: a cross-sectional study among Canadian and Latin American older adults. BMJ Open [Internet]. 2016 Jun 28 [cited 2017 Sep 13];6(6):e011503. Available from: http://www.ncbi.nlm.nih.gov/pubmed/27354077
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/scielo.php?pid=S0120-24482016000200009&script=sci_abstract&tlng=es" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Asociación Colombiana de Medicina Interna. F, Curcio C-L, Benjumea Á-M. El eje hipotálamo-pituitaria-adrenal (HPA) al envejecer. Cortisol salival en ancianos. Colombia [Internet]. Vol. 41, Acta Medica Colombiana. La Asociación; 2016 [cited 2017 Sep 13]. 130-137 p. Available from: http://www.scielo.org.co/scielo.php?pid=S0120-24482016000200009&script=sci_abstract&tlng=es
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
                                                                    Zunzunegui MV, Alvarado BE, Guerra R, Gómez JF, Ylli A, Guralnik JM, et al. The mobility gap between older men and women: The embodiment of gender. Arch Gerontol Geriatr [Internet]. 2015 Sep;61(2):140–8. Available from: http://www.ncbi.nlm.nih.gov/pubmed/26113021
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://bmcgeriatr.biomedcentral.com/articles/10.1186/s12877-015-0083-3" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Nana GN, Doulougou B, Gomez F, Ylli A, Guralnik J, Zunzunegui MV. Social differences associated with the use of psychotropic drugs among men and women aged 65 to 74 years living in the community: the international mobility in aging study (IMIAS). BMC Geriatr [Internet]. 2015 Dec 20;15(1):85. Available from: http://bmcgeriatr.biomedcentral.com/articles/10.1186/s12877-015-0083-3
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielosp.org/pdf/rpsp/v37n4-5/v37n4-5a16.pdf" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Guedes T, Cl C, Llano A, Mv Z, La GR, Guedes DT, et al. Investigación original / Original research La brecha de género en violencia doméstica en adultos mayores en América Latina: el Estudio IMIAS. Pan Am J Public Heal Rev Panam Salud Publica América Lat el Estud IMIAS Rev Panam Salud Publica [Internet]. 2015;3737(4545):293–300. Available from: http://www.scielosp.org/pdf/rpsp/v37n4-5/v37n4-5a16.pdf
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://www.ncbi.nlm.nih.gov/pubmed/25704920" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Guedes DT, Alvarado BE, Phillips SP, Curcio CL, Zunzunegui MV, Guerra RO. Socioeconomic status, social relations and domestic violence (DV) against elderly people in Canada, Albania, Colombia and Brazil. Arch Gerontol Geriatr [Internet]. 2015 May;60(3):492–500. Available from: http://www.ncbi.nlm.nih.gov/pubmed/25704920
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://www.ncbi.nlm.nih.gov/pubmed/25809813" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Huo YR, Suriyaarachchi P, Gomez F, Curcio CL, Boersma D, Gunawardene P, et al. Comprehensive nutritional status in sarco-osteoporotic older fallers. J Nutr Health Aging [Internet]. 2015 Apr 14;19(4):474–80. Available from: http://www.ncbi.nlm.nih.gov/pubmed/25809813
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://www.ncbi.nlm.nih.gov/pubmed/25512216" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Huo YR, Suriyaarachchi P, Gomez F, Curcio CL, Boersma D, Muir SW, et al. Phenotype of Osteosarcopenia in Older Individuals With a History of Falling. J Am Med Dir Assoc [Internet]. 2015 Apr;16(4):290–5. Available from: http://www.ncbi.nlm.nih.gov/pubmed/25512216
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
                                                                    Universidad Industrial de Santander. AP, Toro JCR, Trujillo ET, Montes JFG. Médicas UIS. [Internet]. Vol. 27, REVISTA MÉDICAS UIS. Universidad Industrial de Santander; 2014. Available from: http://revistas.uis.edu.co/index.php/revistamedicasuis/article/view/4325
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://journals.sagepub.com/doi/abs/10.1177/0898264314523448" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Vafaei A, Gomez F, Zunzunegui M V., Guralnik J, Curcio CL, Guerra R, et al. Evaluation of the Late-Life Disability Instrument (LLDI) in Low-Income Older Populations. J Aging Health [Internet]. 2014 Apr 5;26(3):495–515. Available from: http://journals.sagepub.com/doi/10.1177/0898264314523448
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://bmcgeriatr.biomedcentral.com/articles/10.1186/1471-2318-14-2" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Curcio C-L, Henao G-M, Gomez F. Frailty among rural elderly adults. BMC Geriatr [Internet]. 2014 Dec 10;14(1):2. Available from: http://bmcgeriatr.biomedcentral.com/articles/10.1186/1471-2318-14-2
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
                                                                    Curcio C-L, Alvarado BE, Gomez F, Guerra R, Guralnik J, Zunzunegui MV. Life-Space Assessment scale to assess mobility: validation in Latin American older women and men. Aging Clin Exp Res [Internet]. 2013 Oct 15;25(5):553–60. Available from: http://link.springer.com/10.1007/s40520-013-0121-y
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://onlinelibrary.wiley.com/doi/10.1111/ggi.12180/full" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Guerra RO, Oliveira BS, Alvarado BE, Curcio CL, Rejeski WJ, Marsh AP, et al. Validity and applicability of a video-based animated tool to assess mobility in elderly Latin American populations. Geriatr Gerontol Int [Internet]. 2014 Oct 1;14(4):864–73. Available from: http://doi.wiley.com/10.1111/ggi.12180
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://colombiamedica.univalle.edu.co/index.php/comedica/article/view/1362/2162" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Pelaez M, Palloni A, Albala C, Alfonso JC, Ham-Chande R, Hennis A, et al. Prevalence of poor self-rated health and associated risk factors among older adults in Cali, Colombia. Colomb Med [Internet]. 2013;44. Available from: http://colombiamedica.univalle.edu.co/index.php/comedica/article/view/1362/2162
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/scielo.php?pid=S0120-87482013000300003&script=sci_abstract&tlng=es" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Díaz Cabezas R, Marulanda Mejía F, Martínez Arias MH. Acta Neurológica Colombiana [Internet]. Vol. 29, Acta Neurológica Colombiana. [s.n.]; 2013. 141-151 p. Available from: http://www.scielo.org.co/scielo.php?pid=S0120-87482013000300003&script=sci_abstract&tlng=es
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://colombiamedica.univalle.edu.co/index.php/comedica/article/view/1181" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Gómez JF, Curcio C-L, Alvarado B, Zunzunegui MV, Guralnik J. Validity and reliability of the Short Physical Performance Battery (SPPB): a pilot study on mobility in the Colombian Andes. Colomb médica (Cali, Colomb [Internet]. 2013 Sep 30;44(3):165–71. Available from: http://colombiamedica.univalle.edu.co/index.php/comedica/article/view/1181
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.tandfonline.com/doi/abs/10.1080/02701960.2012.699010" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Gomez F, Curcio CL. Interdisciplinary Collaboration in Gerontology and Geriatrics in Latin America: Conceptual Approaches and Health Care Teams. Gerontol Geriatr Educ [Internet]. 2013 Apr;34(2):161–75. Available from: http://www.tandfonline.com/doi/abs/10.1080/02701960.2012.699010
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://www.dovepress.com/differing-approaches-to-falls-and-fracture-prevention-between-australi-peer-reviewed-article-CIA" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Duque G, Gomez CL, Curcio P, Suriyaarachchi O, Demontiero G. Differing approaches to falls and fracture prevention between Australia and Colombia. Clin Interv Aging [Internet]. 2013 Jan 20;8:61. Available from: http://www.dovepress.com/differing-approaches-to-falls-and-fracture-prevention-between-australi-peer-reviewed-article-CIA
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
                                                                    Fernando J, Montes G, Lucía C, Borrero C, Henao GM. Fragilidad en ancianos Colombianos. RevMedicaSanitas [Internet]. 2012;15(4):8–16. Available from: http://www.unisanitas.edu.co/Revista/45/08 ANCIANOS DFN.pdf
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://www.ncbi.nlm.nih.gov/pubmed/22996789" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Gómez F, Zunzunegui M, Lord C, Alvarado B, García A. Applicability of the MoCA-S test in populations with little education in Colombia. Int J Geriatr Psychiatry [Internet]. 2013 Aug;28(8):813–20. Available from: http://www.ncbi.nlm.nih.gov/pubmed/22996789
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/pdf/hpsal/v17n2/v17n2a13.pdf" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Curcio C-L, Montes FG, Decs B). TEMOR A CAER EN ANCIANOS: CONTROVERSIAS EN TORNO A UN CONCEPTO Y A SU MEDICIÓN Temor a caer en ancianos: controversias en torno a un concepto y a su medición FEAR OF FALLING IN THE ELDERLY: CONTROVERSY AROUND A CONCEPT AND ITS ASSESSMENT. 2012;17(172):186–204. Available from: http://www.scielo.org.co/pdf/hpsal/v17n2/v17n2a13.pdf
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
                                                                    Curcio B. C. L., Gómez M JF. Validez convergente y de constructo de la escala de autoeficacia realacionada con caídas (FES) Colombia. Rev la Asoc Colomb Gerontol y Geriatría [Internet]. 2011;25(4). Available from: http://www.acgg.org.co/pdf/revista-25-4.pdf
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/scielo.php?script=sci_arttext&pid=S0120-87482011000400002" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Díaz Cabezas R, Ruano Restrepo MI. Conocimiento de síntomas y factores de riesgo de enfermedad cerebro vascular en una población urbana colombiana [Internet]. Vol. 27, Acta Neurológica Colombiana. [s.n.]; 2011. 195-204 p. Available from: http://www.scielo.org.co/scielo.php?script=sci_arttext&pid=S0120-87482011000400002
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://catalogo.juanncorpas.edu.co/cgi-bin/koha/opac-detail.pl?biblionumber=10663" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Binet-Grosclaude A, Gómez Montes JF. Obesidad Sarcopenica y síndrome de apnea del sueño en ancianos. [Internet]. Bruylant; 2011. Available from: http://catalogo.juanncorpas.edu.co/cgi-bin/koha/opac-detail.pl?biblionumber=10663
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/scielo.php?script=sci_arttext&pid=S0120-24482011000300002" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Asociación Colombiana de Medicina Interna. R, Ruano MI. Acta médica colombiana: Prevalencia y persistencia del insomnio crónico estudio SUECA II [Internet]. Vol. 36, Acta Medica Colombiana. La Asociación; 2011. 119-124 p. Available from: http://www.scielo.org.co/scielo.php?script=sci_arttext&pid=S0120-24482011000300002
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="https://www.ncbi.nlm.nih.gov/pubmed/21623472" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Gomez F, Curcio CL, Duque G. Dizziness as a geriatric condition among rural community-dwelling older adults. J Nutr Health Aging [Internet]. 2011 Jun;15(6):490–7. Available from: http://www.ncbi.nlm.nih.gov/pubmed/21623472
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/pdf/hpsal/v16n2/v16n2a03.pdf" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Curcio CL, Corriveau H, Beaulieu M. SENTIDO Y PROCESO DEL TEMOR A CAER EN ANCIANOS MEANING AND FEAR OF FALLING PROCESS IN THE ELDERLY. 2011;16(162):32–51. Available from: http://www.scielo.org.co/pdf/hpsal/v16n2/v16n2a03.pdf
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/pdf/amc/v36n2/v36n2a06.pdf" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Escobar cols AM, Diaz R, Posada A. Criptococosis diseminada en anciano con VIH Colombia. 2011; Available from: http://www.scielo.org.co/pdf/amc/v36n2/v36n2a06.pdf
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction" href="http://www.scielo.org.co/pdf/amc/v36n1/v36n1a03.pdf" target="_blank">
                                                            <div class="tile-text">
                                                                <p>
                                                                    Diaz R, Marulanda F. Dolor crónico nociceptivo y neuropático en población adulta de Manizales (Colombia). 2011;36(1). Available from: http://www.scielo.org.co/pdf/amc/v36n1/v36n1a03.pdf
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
                                                                    Lucía C, Borrero C. INVESTIGACIÓN Y ENVEJECIMIENTO: DEL DATO A LA TEORÍA RESEARCH AND AGING: FROM DATA TO THEORY. 2010;15(151):144–66. Available from: http://www.scielo.org.co/pdf/hpsal/v15n1/v15n1a10.pdf
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