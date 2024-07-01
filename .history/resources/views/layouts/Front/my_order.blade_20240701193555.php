{{--
<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')
</head>

<body class="index-page">

    {{--Header --}}
    {{-- @include('layouts.Front.header')

    <main class="main">
        @include('layouts.Front.singlePage')
        <div class="p-5 d-flex justify-content-end fw-bold" style="color: #37517e">
            <a href="{{url('my_orders')}}" class="fs-2 text-uppercase">Orders <i
                    class="fs-2 bi bi-folder-symlink-fill"></i></a>
        </div>

        <div class="table-responsive text-wrap mt-5">
            <table class="table align-middle w-50 mx-auto">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Images</th>
                    </tr>
                </thead>

                @foreach ($order as $order )
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>
                            <strong>{{$order->product->title}}</strong>
                        </td>

                        <td>
                            {{$order->product->price}}
                        </td>
                        <td><span class="badge bg-label-primary">{{$order->product->category}}</span>
                        </td>
                        <td>
                            <img src="productImages/{{$order->product->image}}" style="width: 80px;" alt="">
                        </td>


                    </tr>
                </tbody>

                @endforeach
            </table>
        </div>
    </main> --}}

    {{--footer--}}
    @include('layouts.Front.footer')


    {{--javascribt--}}
    @include('layouts.Front.script')

</body>

{{--

</html> --}}

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Fancy Form</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Pacifico|Roboto");

        body {
            background: #428bca;
            font-family: 'Roboto', sans-serif;
            margin: 0;
        }

        h1.logo {
            color: #fff;
            font-family: 'Pacifico', cursive;
            font-size: 4em;
            margin-bottom: 1em;
        }

        h1.end {
            position: relative;
            color: #fff;
            opacity: 0;
            transition: 0.8s ease-in-out;
        }

        #container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: top;
            align-items: center;
        }

        #form-box {
            background: #fff;
            position: relative;
            width: 600px;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.1), 0 6px 10px 5px rgba(0, 0, 0, 0.1), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
            transition: transform 0.1s ease-in-out;
        }

        #form-box.close {
            width: 0;
            padding: 0;
            overflow: hidden;
            transition: 0.8s ease-in-out;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0);
        }

        #next-btn {
            position: absolute;
            right: 20px;
            bottom: 10px;
            font-size: 40px;
            color: #428bca;
            float: right;
            cursor: pointer;
            z-index: 2;
        }

        #next-btn:hover {
            color: #b9d4ec;
        }

        #prev-btn {
            position: absolute;
            font-size: 18px;
            left: 30px;
            top: 12px;
            z-index: 2;
            color: #9e9e9e;
            float: right;
            cursor: pointer;
        }

        #prev-btn:hover {
            color: #b9d4ec;
        }

        #input-group {
            position: relative;
            padding: 30px 20px 20px 20px;
            margin: 10px 60px 10px 10px;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        #input-group input {
            position: relative;
            width: 100%;
            border: none;
            font-size: 20px;
            font-weight: bold;
            outline: 0;
            background: transparent;
            box-shadow: none;
        }

        #input-group #input-label {
            position: absolute;
            pointer-events: none;
            top: 32px;
            left: 20px;
            font-size: 20px;
            font-weight: bold;
            transition: 0.2s ease-in-out;
        }

        #input-group input:valid+#input-label {
            top: 6px;
            left: 42px;
            margin-left: 0 !important;
            font-size: 11px;
            font-weight: normal;
            color: #9e9e9e;
        }

        #input-progress {
            border-bottom: 3px solid #428bca;
            width: 0;
            transition: width 0.6s ease-in-out;
        }

        #progress-bar {
            position: absolute;
            background: #b9d4ec;
            height: 10px;
            width: 0;
            transition: width 0.5s ease-in-out;
        }

        .close #next-btn,
        .close #prev-btn {
            color: #fff;
        }

        .error #input-progress {
            border-color: #ff2d26;
        }

        .error #next-btn {
            color: #ff2d26;
        }

        @media (max-width: 600px) {
            #form-box {
                width: 80%;
            }
        }
    </style>
</head>

<body>
    <div id="container">
        <h1 class="logo">Fancy Form</h1>
        <div id="form-box">
            <i id="prev-btn" class="fas fa-arrow-left"></i>
            <i id="next-btn" class="fas fa-arrow-right"></i>
            <div id="input-group">
                <input id="input-field" required>
                <label id="input-label"></label>
                <div id="input-progress"></div>
            </div>
            <div id="progress-bar"></div>
        </div>
    </div>

    <script src="js/main.js"></script>
    <script>
        // Questions Array
            const questions = [
            { question: 'Enter Your First Name' },
            { question: 'Enter Your Last Name' },
            { question: 'Enter Your Email', pattern: /\S+@\S+\.\S+/ },
            { question: 'Create A Password', type: 'password' }
            ];

            // Transition Times
            const shakeTime = 100; // Shake Transition Time
            const switchTime = 200; // Transition Between Questions

            // Init Position At First Question
            let position = 0;

            // Init DOM Elements
            const formBox = document.querySelector('#form-box');
            const nextBtn = document.querySelector('#next-btn');
            const prevBtn = document.querySelector('#prev-btn');
            const inputGroup = document.querySelector('#input-group');
            const inputField = document.querySelector('#input-field');
            const inputLabel = document.querySelector('#input-label');
            const inputProgress = document.querySelector('#input-progress');
            const progress = document.querySelector('#progress-bar');

            // EVENTS

            // Get Question On DOM Load
            document.addEventListener('DOMContentLoaded', getQuestion);

            // Next Button Click
            nextBtn.addEventListener('click', validate);

            // Input Field Enter Click
            inputField.addEventListener('keyup', e => {
            if (e.keyCode == 13) {
                validate();
            }
            });

            // FUNCTIONS

            // Get Question From Array & Add To Markup
            function getQuestion() {
            // Get Current Question
            inputLabel.innerHTML = questions[position].question;
            // Get Current Type
            inputField.type = questions[position].type || 'text';
            // Get Current Answer
            inputField.value = questions[position].answer || '';
            // Focus On Element
            inputField.focus();

            // Set Progress Bar Width - Variable to the questions length
            progress.style.width = (position * 100) / questions.length + '%';

            // Add User Icon OR Back Arrow Depending On Question
            prevBtn.className = position ? 'fas fa-arrow-left' : 'fas fa-user';

            showQuestion();
            }

            // Display Question To User
            function showQuestion() {
            inputGroup.style.opacity = 1;
            inputProgress.style.transition = '';
            inputProgress.style.width = '100%';
            }

            // Hide Question From User
            function hideQuestion() {
            inputGroup.style.opacity = 0;
            inputLabel.style.marginLeft = 0;
            inputProgress.style.width = 0;
            inputProgress.style.transition = 'none';
            inputGroup.style.border = null;
            }

            // Transform To Create Shake Motion
            function transform(x, y) {
            formBox.style.transform = `translate(${x}px, ${y}px)`;
            }

            // Validate Field
            function validate() {
            // Make Sure Pattern Matches If There Is One
            if (!inputField.value.match(questions[position].pattern || /.+/)) {
                inputFail();
            } else {
                inputPass();
            }
            }

            // Field Input Fail
            function inputFail() {
            formBox.className = 'error';
            // Repeat Shake Motion -  Set i to number of shakes
            for (let i = 0; i < 6; i++) {
                setTimeout(transform, shakeTime * i, ((i % 2) * 2 - 1) * 20, 0);
                setTimeout(transform, shakeTime * 6, 0, 0);
                inputField.focus();
            }
            }

            // Field Input Passed
            function inputPass() {
            formBox.className = '';
            setTimeout(transform, shakeTime * 0, 0, 10);
            setTimeout(transform, shakeTime * 1, 0, 0);

            // Store Answer In Array
            questions[position].answer = inputField.value;

            // Increment Position
            position++;

            // If New Question, Hide Current and Get Next
            if (questions[position]) {
                hideQuestion();
                getQuestion();
            } else {
                // Remove If No More Questions
                hideQuestion();
                formBox.className = 'close';
                progress.style.width = '100%';

                // Form Complete
                formComplete();
            }
            }

            // All Fields Complete - Show h1 end
            function formComplete() {
            const h1 = document.createElement('h1');
            h1.classList.add('end');
            h1.appendChild(
                document.createTextNode(
                `Thanks ${
                    questions[0].answer
                } You are registered and will get an email shortly`
                )
            );
            setTimeout(() => {
                formBox.parentElement.appendChild(h1);
                setTimeout(() => (h1.style.opacity = 1), 50);
            }, 1000);
            }

    </script>
</body>

</html>