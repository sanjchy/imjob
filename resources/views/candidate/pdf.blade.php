<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title>Document</title>
    </head>

    <body class="p-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
                </div>
                <div class="col-md-5">
                    <h3>
                        {{ $candidate->firstName }}
                        {{ $candidate->lastName }}

                    </h3>
                    <p>
                        {{ $candidate->message }}
                    </p>
                </div>
                <div class="col-md-4">
                    <dl>
                        <dt>
                            Description lists
                        </dt>
                        <dd>
                            A description list is perfect for defining terms.
                        </dd>
                        <dt>
                            Euismod
                        </dt>
                        <dd>
                            Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                        </dd>
                        <dd>
                            Donec id elit non mi porta gravida at eget metus.
                        </dd>
                        <dt>
                            Malesuada porta
                        </dt>
                        <dd>
                            Etiam porta sem malesuada magna mollis euismod.
                        </dd>
                        <dt>
                            Felis euismod semper eget lacinia
                        </dt>
                        <dd>
                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                            justo
                            sit amet risus.
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-md-6">
                    <h3>
                        Education
                    </h3>
                    <dl>
                        @foreach ($candidate->schools as $school)
                        <dt>
                            {{ $school->schoolName }}
                        </dt>
                        <dd>
                            {{ $school->city }}
                        </dd>
                        @endforeach
                    </dl>
                </div>
                <div class="col-md-6">
                    <h3>
                        h3. Lorem ipsum dolor sit amet.
                    </h3>
                    <dl>
                        <dt>
                            Description lists
                        </dt>
                        <dd>
                            A description list is perfect for defining terms.
                        </dd>
                        <dt>
                            Euismod
                        </dt>
                        <dd>
                            Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                        </dd>
                        <dd>
                            Donec id elit non mi porta gravida at eget metus.
                        </dd>
                        <dt>
                            Malesuada porta
                        </dt>
                        <dd>
                            Etiam porta sem malesuada magna mollis euismod.
                        </dd>
                        <dt>
                            Felis euismod semper eget lacinia
                        </dt>
                        <dd>
                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                            justo
                            sit amet risus.
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3>
                        Software Skills
                    </h3>
                    <dl>
                        @foreach ($candidate->softwares as $software)
                        <dt>
                            {{ $software->software }}
                        </dt>
                        <dd>
                            {{ $software->level }}
                        </dd>
                        @endforeach
                    </dl>
                </div>
                <div class="col-md-4">
                    <h3>
                        Professional Skills
                    </h3>
                    <dl>
                        @foreach ($candidate->skills as $skill)
                        <dt>
                            {{ $skill->skill }}
                        </dt>
                        <dd>
                            {{ $skill->level }}
                        </dd>
                        @endforeach
                    </dl>
                </div>
                <div class="col-md-4">
                    <h3>
                        Language Skills
                    </h3>
                    <dl>
                        @foreach ($candidate->languages as $language)
                        <dt>
                            {{ $language->language }}
                        </dt>
                        <dd>
                            {{ $language->level }}
                        </dd>
                        @endforeach
                    </dl>
                </div>
            </div>
        </div>

    </body>

</html>
