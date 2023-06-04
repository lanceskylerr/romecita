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
                <button class="btn mb-2 mx-1" data-filter="bk">Bahay Kubo</button>
                <button class="btn mb-2 mx-1" data-filter="cr">Couple Room</button>
                <button class="btn mb-2 mx-1" data-filter="dd">Double Decker</button>
                <button class="btn mb-2 mx-1" data-filter="fh">Family House</button>
                <button class="btn mb-2 mx-1" data-filter="kwr">Kubo With Room</button>
                <button class="btn mb-2 mx-1" data-filter="rr">Residential Room</button>

            </div>
        </div>
        <!-----------------------------COTTAGES------------------------------------------------------------------->
        <div class="row px-2 mt-4 gap-3" id="filterable-cards">
        
            
                 
                <!-----------------------------ROOMS--------------------------------------------------------------------------->

                <!-----------------------------BAHAY KUBO---------------------------------------------------------------------->
                <div class="card p-0" data-name="bk">
                    <img src="images/rooms/BAHAY KUBO/bk1.jpg" alt="img">
                    <div class="card-body">
                        <h6 class="card-title">Bahay Kubo</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
                <div class="card p-0" data-name="bk">
                    <img src="images/rooms/BAHAY KUBO/bk2.jpg" alt="img">
                    <div class="card-body">
                        <h6 class="card-title">Bahay Kubo</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
                <div class="card p-0" data-name="bk">
                    <img src="images/rooms/BAHAY KUBO/bk3.jpg" alt="img">
                    <div class="card-body">
                        <h6 class="card-title">Bahay Kubo</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
                <div class="card p-0" data-name="bk">
                    <img src="images/rooms/BAHAY KUBO/bk4.jpg" alt="img">
                    <div class="card-body">
                        <h6 class="card-title">Bahay Kubo</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
                <div class="card p-0" data-name="bk">
                    <img src="images/rooms/BAHAY KUBO/bk5.jpg" alt="img">
                    <div class="card-body">
                        <h6 class="card-title">Bahay Kubo</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>

                <!-----------------------------COUPLE ROOM--------------------------------------------------------------------->
                <div class="card p-0" data-name="cr">
                    <img src="images/rooms/COUPLE ROOM/cr1.jpg" alt="img">
                    <div class="card-body">
                        <h6 class="card-title">Couple Room</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
                <div class="card p-0" data-name="cr">
                    <img src="images/rooms/COUPLE ROOM/cr2.jpg" alt="img">
                    <div class="card-body">
                        <h6 class="card-title">Couple Room</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
                <div class="card p-0" data-name="cr">
                    <img src="images/rooms/COUPLE ROOM/cr3.jpg" alt="img">
                    <div class="card-body">
                        <h6 class="card-title">Couple Room</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                </div>
                <div class="card p-0" data-name="cr">
                    <img src="images/rooms/COUPLE ROOM/cr4.jpg" alt="img">
                    <div class="card-body">
                        <h6 class="card-title">Couple Room</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="cr">
                <img src="images/rooms/COUPLE ROOM/cr5.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Couple Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="cr">
                <img src="images/rooms/COUPLE ROOM/cr6.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Couple Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-----------------------------DOUBLE DECKER------------------------------------------------------------------->
            <div class="card p-0" data-name="dd">
                <img src="images/rooms/DOUBLE DECKER/dd1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Double Decker</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="dd">
                <img src="images/rooms/DOUBLE DECKER/dd2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Double Decker</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="dd">
                <img src="images/rooms/DOUBLE DECKER/dd3.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Double Decker</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="dd">
                <img src="images/rooms/DOUBLE DECKER/dd4.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Double Decker</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="dd">
                <img src="images/rooms/DOUBLE DECKER/dd5.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Double Decker</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="dd">
                <img src="images/rooms/DOUBLE DECKER/dd6.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Double Decker</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="dd">
                <img src="images/rooms/DOUBLE DECKER/dd7.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Double Decker</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-----------------------------FAMILY HOUSE-------------------------------------------------------------------->
            <div class="card p-0" data-name="fh">
                <img src="images/rooms/FAMILY HOUSE/fh1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="fh">
                <img src="images/rooms/FAMILY HOUSE/fh2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="fh">
                <img src="images/rooms/FAMILY HOUSE/fh3.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="fh">
                <img src="images/rooms/FAMILY HOUSE/fh4.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="fh">
                <img src="images/rooms/FAMILY HOUSE/fh5.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="fh">
                <img src="images/rooms/FAMILY HOUSE/fh6.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="fh">
                <img src="images/rooms/FAMILY HOUSE/fh7.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="fh">
                <img src="images/rooms/FAMILY HOUSE/fh8.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="fh">
                <img src="images/rooms/FAMILY HOUSE/fh9.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="fh">
                <img src="images/rooms/FAMILY HOUSE/fh10.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">fAMILY House</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-----------------------------KUBO W- ROOM-------------------------------------------------------------------->
            <div class="card p-0" data-name="kwr">
                <img src="images/rooms/KUBO W- ROOM/kwr1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Kubo With Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="kwr">
                <img src="images/rooms/KUBO W- ROOM/kwr2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Kubo With Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <!-----------------------------RESIDENTIAL ROOM---------------------------------------------------------------->
            <div class="card p-0" data-name="rr">
                <img src="images/rooms/RESIDENTIAL ROOM/rr1.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Residential Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rr">
                <img src="images/rooms/RESIDENTIAL ROOM/rr2.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Residential Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rr">
                <img src="images/rooms/RESIDENTIAL ROOM/rr3.jpg" alt="img">
                <div class="card-body">
                    <h6 class="card-title">Residential Room</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                </div>
            </div>
            <div class="card p-0" data-name="rr">
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