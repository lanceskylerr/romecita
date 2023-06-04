<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Filterable Image Gallery Bootstrap | CodingNepal</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="script.js" defer></script>
</head>

<style>
    .items span {
        padding: 15px 30px;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        color: #abcda1;
        border-radius: 50px;
        border: 2px solid #abcda1;
        transition: all 0.3s ease;
        background-color: #fff;
    }

    .items span.active,
    .items span:hover {
        color: #fff;
        background: #F7E7CE;
        border-color: #F7E7CE;
    }


    body {
        background-image: url("images/resort.jpg");
        background-size: active;
    }


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    ::selection {
        color: #fff;
        background: #007bff;
    }

    body {
        padding: 10px;
        backdrop-filter: blur(5px);
        /* Add blur effect to the body background */
    }

    .wrapper {
        margin: 100px auto;
        max-width: 1100px;
        background-color: rgba(255, 255, 255, 0.8);
        /* Add a semi-transparent background color to the wrapper */
    }


    /* Import Google font - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    * {
        font-family: "Poppins", sans-serif;
    }



    body .container {
        max-width: 1100px;
    }

    #filter-buttons button {
        border-radius: 3px;
        background: #fff;
        border-color: transparent;
    }

    #filter-buttons button:hover {
        background: #ddd;
    }

    #filter-buttons button.active {
        color: #fff;
        background: #6c757d;
    }

    #filterable-cards .card {
        width: 15rem;
        border: 2px solid transparent;
    }

    #filterable-cards .card.hide {
        display: none;
    }

    @media (max-width: 600px) {
        #filterable-cards {
            justify-content: center;
        }

        #filterable-cards .card {
            width: calc(100% / 2 - 10px);
        }
    }
</style>


<body>
    <div class="container">
        <!-- Images Filter Buttons Section -->
        <div class="row mt-5" id="filter-buttons">
            <div class="col-12">
                <!-- <button  href = 'index.php' class="btn mb-2">Back</button> -->
                <a class="btn mb-2 mx-1" href="index.php">Back</a>
                <button class="btn mb-2 me-1 active" data-filter="all">All</button>
                <button class="btn mb-2 mx-1" data-filter="cottages">Cottages</button>
                <button class="btn mb-2 mx-1" data-filter="pavillions">Pavillions</button>
                <button class="btn mb-2 mx-1" data-filter="pools">Swimming Pools</button>
                <button class="btn mb-2 mx-1" data-filter="rooms">Rooms</button>
            </div>
        </div>
        <!-----------------------------COTTAGES------------------------------------------------------------------->
        <div class="row px-2 mt-4 gap-3" id="filterable-cards">
            <div class="card p-0" data-name="cottages">
                <img src="images/cottages/barkadacottage.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Barkada Cottage</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="cottages">
                <img src="images/cottages/barkadacottage1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Barkada Cottage 1</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="cottages">
                <img src="images/cottages/barkadacottage2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Barkada Cottage 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="cottages">
                <img src="images/cottages/familycottage.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Family Cottage</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="cottages">
                <img src="images/cottages/familycottage1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Family Cottage 1</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="cottages">
                <img src="images/cottages/largekubo.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Large Kubo</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="cottages">
                <img src="images/cottages/mediumkubo.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Medium Kubo</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="cottages">
                <img src="images/cottages/smallkubo.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Small Kubo</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="cottages">
                <img src="images/cottages/smallkubo1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Small Kubo (1)</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="cottages">
                <img src="images/cottages/smallkubo2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Small Kubo (2)</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-----------------------------PAVILLIONS------------------------------------------------------------>

            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion1/1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 1</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion1/12.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 1</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion1/13.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 1</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion1/14.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 1</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-----------------------------PAVILLION 2---------------------------------------------------------->

            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion2/2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion2/22.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion2/23.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion2/24.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion2/25.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion2/26.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion2/27.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion2/28.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion2/29.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion2/210.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion2/211.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion2/212.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion2/213.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion2/214.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 2</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-----------------------------PAVILLION3---------------------------------------------------------------->
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion3/3.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 3</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion3/31.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 3</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion3/32.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 3</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion3/33.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 3</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion3/34.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 3</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion3/35.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 3</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion3/37.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 3</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion3/38.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 3</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion3/39.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 3</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion3/310.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 3</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion3/311.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 3</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion3/312.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 3</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion3/313.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 3</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-----------------------------PAVILLION3--------------------------------------------------------------->
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion4/4.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 4</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion4/42.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 4</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion4/43.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 4</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pavillions">
                <img src="images/pavillions/pavillion4/44.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Pavillion 4</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-----------------------------POOLS------------------------------------------------------------------->
            <div class="card p-0" data-name="pools">
                <img src="images/romecita/pool1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Swimming Pools</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pools">
                <img src="images/romecita/pool1.2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Swimming Pools</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pools">
                <img src="images/romecita/pool1.3.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Swimming Pools</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pools">
                <img src="images/romecita/pool1.4.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Swimming Pools</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pools">
                <img src="images/romecita/pool2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Swimming Pools</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pools">
                <img src="images/romecita/pool2.2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Swimming Pools</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pools">
                <img src="images/romecita/pool2.3.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Swimming Pools</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pools">
                <img src="images/romecita/pool2.4.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Swimming Pools</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pools">
                <img src="images/romecita/pool2.5.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Swimming Pools</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pools">
                <img src="images/romecita/pool3.2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Swimming Pools</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pools">
                <img src="images/romecita/pool3.3.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Swimming Pools</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pools">
                <img src="images/romecita/pool3.4.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Swimming Pools</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="pools">
                <img src="images/romecita/pool3.5.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Swimming Pools</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-----------------------------ROOMS--------------------------------------------------------------------------->

            <!-----------------------------BAHAY KUBO---------------------------------------------------------------------->
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/BAHAY KUBO/bk1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Bahay Kubo</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/BAHAY KUBO/bk2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Bahay Kubo</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/BAHAY KUBO/bk3.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Bahay Kubo</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/BAHAY KUBO/bk4.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Bahay Kubo</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/BAHAY KUBO/bk5.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Bahay Kubo</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>

            <!-----------------------------COUPLE ROOM--------------------------------------------------------------------->
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/COUPLE ROOM/cr1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Couple Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/COUPLE ROOM/cr2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Couple Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/COUPLE ROOM/cr3.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Couple Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/COUPLE ROOM/cr4.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Couple Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/COUPLE ROOM/cr5.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Couple Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/COUPLE ROOM/cr6.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Couple Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-----------------------------DOUBLE DECKER------------------------------------------------------------------->
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/DOUBLE DECKER/dd1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Double Decker</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/DOUBLE DECKER/dd2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Double Decker</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/DOUBLE DECKER/dd3.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Double Decker</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/DOUBLE DECKER/dd4.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Double Decker</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/DOUBLE DECKER/dd5.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Double Decker</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/DOUBLE DECKER/dd6.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Double Decker</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/DOUBLE DECKER/dd7.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Double Decker</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-----------------------------FAMILY HOUSE-------------------------------------------------------------------->
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/FAMILY HOUSE/fh1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/FAMILY HOUSE/fh2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/FAMILY HOUSE/fh3.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/FAMILY HOUSE/fh4.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/FAMILY HOUSE/fh5.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/FAMILY HOUSE/fh6.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/FAMILY HOUSE/fh7.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/FAMILY HOUSE/fh8.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/FAMILY HOUSE/fh9.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/FAMILY HOUSE/fh10.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-----------------------------KUBO W- ROOM-------------------------------------------------------------------->
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/KUBO W- ROOM/kwr1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Kubo With Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/KUBO W- ROOM/kwr2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Kubo With Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-----------------------------RESIDENTIAL ROOM---------------------------------------------------------------->
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/RESIDENTIAL ROOM/rr1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Residential Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/RESIDENTIAL ROOM/rr2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Residential Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/RESIDENTIAL ROOM/rr3.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Residential Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rooms">
                <img src="images/rooms/RESIDENTIAL ROOM/rr4.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Residential Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>

        </div>

        <script>
            const filterButtons = document.querySelectorAll("#filter-buttons button");
            const cards = document.querySelectorAll("#filterable-cards .card");

            filterButtons.forEach(button => {
                button.addEventListener("click", function () {
                    filterButtons.forEach(btn => btn.classList.remove("active"));
                    this.classList.add("active");

                    const filterValue = this.getAttribute("data-filter");
                    cards.forEach(card => {
                        card.classList.remove("hide");
                        if (filterValue !== "all" && !card.getAttribute("data-name").includes(filterValue)) {
                            card.classList.add("hide");
                        }
                    });
                });
            });

        </script>

</body>

</html>