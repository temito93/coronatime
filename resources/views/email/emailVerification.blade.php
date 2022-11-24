<!DOCTYPE html>
<html lang="en" style="height: 100%">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />

        <style type="text/css">
            u + #body a {
                color: white;
                text-decoration: none;
            }
            .body {
                height: 100%;
                min-height: 100%;
                display: flex;
                margin-left: 25%;
            }
            .content {
                text-align: center;
                margin-top: 56px !important;
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
            }
        </style>
    </head>
    <body id="body">
        <div class="body">
            <div>
                <img
                    src="{{$message->embed(public_path().'/assets/images/email.png')}}"
                    alt=""
                    width="520"
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
    </body>
</html>
