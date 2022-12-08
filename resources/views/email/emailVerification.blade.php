<!DOCTYPE html>
<html lang="en" style="height: 100%">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <style type="text/css">
            u + #body a {
                color: white;
                text-decoration: none;
            }
            .body {
                width: 100%;
                height: 100%;
                min-height: 100%;
                text-align: center;
            }
            .content {
                text-align: center;
                margin-top: 56px !important;
            }

            a {
                color: white;
                text-decoration: none;
            }

            h2 {
                color: #010414;
                font-weight: 900;
                font-size: 25px;
            }
            p {
                font-weight: 400;
                font-size: 18px;
                color: #010414;
                margin-top: 16px;
            }

            .container {
                width: 100%;
                text-align: center;
                margin: 0 auto;
            }

            .l-button {
                padding: 19px 0;
                display: block;
                margin: 0 auto;
                margin-top: 40px;
                background-color: #0fba68;
                border-radius: 8px;
                width: 392px;
                color: white;
                text-align: center;
                cursor: pointer;
                font-weight: 900;
                font-size: 16px;
            }

            .img {
                max-width: 520px;
            }

            @media (max-width: 500px) {
                h2 {
                    font-size: 20px;
                }
                p {
                    font-size: 16px;
                    margin-top: 8px;
                }

                .l-button {
                    padding: 15px 0;
                    font-size: 14px;
                    max-width: 343px;
                    width: 100%;
                }

                .body {
                    margin-left: unset;
                    text-align: center;
                    max-width: 343px;
                    width: 100%;
                    margin-top: 16px;
                }

                .container {
                    width: 100%;
                    margin: 0 auto;
                    text-align: center;
                }

                .content {
                    margin: 0 auto;
                    margin-top: 40px !important;
                }

                .img {
                    max-width: 343px;
                    width: 100%;
                }
            }
        </style>
    </head>
    <div id="body">
        <div class="body">
            <div class="container">
                <img
                    src="{{$message->embed(public_path().'/assets/images/email.png')}}"
                    alt="image"
                    class="img"
                />
                <div class="content">
                    <h2>{{ __("email.title.email") }}</h2>
                    <p>{{ __("email.verify.email") }}</p>
                </div>

                <a
                    class="l-button"
                    href="{{ route('user.verify', ['token' => $token, 'locale' => app()->getLocale()]) }}"
                    >{{ __("email.verify.email.button") }}</a
                >
            </div>
        </div>
    </div>
</html>
