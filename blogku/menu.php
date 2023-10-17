<?php
if (!isset($_POST['submit'])) {
    header("location:register.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            padding: 0px 150px;
        }



        .search {
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-align: center;
        }

        .search__input {
            font-family: inherit;
            font-size: inherit;
            background-color: #f4f2f2;
            border: none;
            color: #646464;
            padding: 0.7rem 1rem;
            border-radius: 30px;
            width: 12em;
            transition: all ease-in-out .5s;
            margin-right: -2rem;
        }

        .search__input:hover,
        .search__input:focus {
            box-shadow: 0 0 1em #00000013;
        }

        .search__input:focus {
            outline: none;
            background-color: #f0eeee;
        }

        .search__input::-webkit-input-placeholder {
            font-weight: 100;
            color: #ccc;
        }

        .search__input:focus+.search__button {
            background-color: #f0eeee;
        }

        .search__button {
            border: none;
            background-color: #f4f2f2;
            margin-top: .1em;
        }

        .search__button:hover {
            cursor: pointer;
        }

        .search__icon {
            height: 1.3em;
            width: 1.3em;
            fill: #b4b4b4;
        }

        .header {
            width: 100%;
            height: 100px;
            display: flex;

            /* justify-content: space-between;*/
            align-items: center;
        }

        svg {
            width: 100px;
            height: 40px;
        }
    </style>
</head>

<body>
    <h1>halaman menu</h1>
    <header class="header">
        <div class="post-menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>
        </div>
        <nav class="navbar">
            <div class="search">
                <input type="text" class="search__input" placeholder="Type your text">
                <button class="search__button">
                    <svg class="search__icon" aria-hidden="true" viewBox="0 0 24 24">
                        <g>
                            <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                        </g>
                    </svg>
                </button>
            </div>
        </nav>

    </header>

</body>

</html>