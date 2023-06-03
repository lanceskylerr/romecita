    <!DOCTYPE html>
    <!-- Created By CodingNepal - www.codingnepalweb.com -->
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Explore the Beauty</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

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
        }

        .wrapper {
            margin: 100px auto;
            max-width: 1100px;
        }

        .wrapper nav {
            display: flex;
            justify-content: center;
        }

        .wrapper .items {
            display: flex;
            /* max-width: 720px; */
            width: 100%;
            justify-content: space-between;
        }

        .items span {
            padding: 15px 30px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            color: #abcda1;
            border-radius: 50px;
            border: 2px solid #abcda1;
            transition: all 0.3s ease;
        }

        .items span.active,
        .items span:hover {
            color: #fff;
            background: #F7E7CE;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            margin-top: 30px;
            justify-content: space-between;
            /* Distribute images evenly with equal space between them */
            align-content: flex-start;
            /* Align images to the top of the container */
        }

        .gallery .image {
            width: calc(25% - 14px);
            /* Adjust the width and padding to distribute images evenly */
            padding: 7px;
        }

        .gallery .image span {
            display: flex;
            width: 100%;
            height: 100%;
            overflow: hidden;
            justify-content: center;
            /* Center align the image within the container */
            align-items: center;
            /* Center align the image within the container */
        }

        .gallery .image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            /* Maintain aspect ratio and fit the image within the container */
            vertical-align: middle;
            transition: all 0.3s ease;
        }

        .gallery .image:hover img {
            transform: scale(1.1);
        }

        .gallery .image.hide {
            display: none;
        }

        .gallery .image.show {
            animation: animate 0.4s ease;
        }

        @keyframes animate {
            0% {
                transform: scale(0.5);
            }

            100% {
                transform: scale(1);
            }
        }

        .hhh {
            padding-left: 500px;
            padding-top: 20px;
        }

        .preview-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.9);
            background: #fff;
            max-width: 700px;
            width: 100%;
            z-index: 5;
            opacity: 0;
            pointer-events: none;
            border-radius: 3px;
            padding: 0 5px 5px 5px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }

        .preview-box.show {
            opacity: 1;
            pointer-events: auto;
            transform: translate(-50%, -50%) scale(1);
            transition: all 0.3s ease;
        }

        .preview-box .details {
            padding: 13px 15px 13px 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .details .title {
            display: flex;
            font-size: 18px;
            font-weight: 400;
        }

        .details .title p {
            font-weight: 500;
            margin-left: 5px;
        }

        .details .icon {
            color: #007bff;
            font-style: 22px;
            cursor: pointer;
        }

        .preview-box .image-box {
            width: 100%;
            display: flex;
        }

        .image-box img {
            width: 100%;
            border-radius: 0 0 3px 3px;
        }

        .shadow {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            z-index: 2;
            display: none;
            background: rgba(0, 0, 0, 0.4);
        }

        .shadow.show {
            display: block;
        }

        @media (max-width: 1000px) {
            .gallery .image {
                width: calc(33.33% - 14px);
            }
        }

        @media (max-width: 800px) {
            .gallery .image {
                width: calc(50% - 14px);
            }
        }

        @media (max-width: 700px) {
            .wrapper nav .items {
                max-width: 600px;
            }

            nav .items span {
                padding: 7px 15px;
            }
        }

        @media (max-width: 600px) {
            .wrapper {
                margin: 30px auto;
            }

            .wrapper nav .items {
                flex-wrap: wrap;
                justify-content: center;
            }

            nav .items span {
                margin: 5px;
            }

            .gallery .image {
                width: 100%;
            }
        }
    </style>


    <body>
        <div class="hhh">
            <h1>RomeCita Garden Resort</h1>
        </div>

        <div class="wrapper">
            <!-- filter Items -->
            <nav>
                <div class="items">
                    <a class="item" href="index.php">Back</a>

                    <span class="item active" data-name="all">All</span>
                    <span class="item" data-name="Cottages">Cottages</span>
                    <span class="item" data-name="Pavillions">Pavillions</span>
                    <span class="item" data-name="Swimming Pool">Swimming Pools</span>
                    <span class="item" data-name="Rooms">Rooms</span>
                    <!-- <span class="item" data-name="headphone">Headphone</span> -->
                </div>
            </nav>
            <!-- filter Images -->
            <div class="gallery">
                <!--------------------------------COTTAGES-------------------------------------------------------->
                <div class="image" data-name="Cottages"><span><img src="images/cottages/barkadacottage.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Cottages"><span><img src="images/cottages/barkadacottage1.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Cottages"><span><img src="images/cottages/barkadacottage2.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Cottages"><span><img src="images/cottages/familycottage.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Cottages"><span><img src="images/cottages/familycottage1.jpg" alt=""></span>
                </div>
                <!-- <div class="image" data-name="#"><span><img src="images/cottages/largekubo.jpg" alt=""></span></div> -->
                <div class="image" data-name="Cottages"><span><img src="images/cottages/mediumkubo.jpg" alt=""></span></div>
                <div class="image" data-name="Cottages"><span><img src="images/cottages/smallkubo.jpg" alt=""></span></div>
                <div class="image" data-name="Cottages"><span><img src="images/cottages/smallkubo1.jpg" alt=""></span></div>
                <div class="image" data-name="Cottages"><span><img src="images/cottages/smallkubo2 .jpg" alt=""></span>
                </div>

                <!--------------------------------PAVILLIONS-------------------------------------------------------->
                <div class="image" data-name="Pavillions"><span><img src="images/pavillions/pavillion1/1.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion1/12.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/pavillions/pavillion1/13.jpg"
                            alt=""></span></div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion1/14.jpg" alt=""></span>
                </div>
                <!--------------------------------------------------------------------------------------------------->
                <div class="image" data-name="Pavillions"><span><img src="images/pavillions/pavillion2/2.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion2/22.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/pavillions/pavillion2/23.jpg"
                            alt=""></span></div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion2/24.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion2/25.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion2/26.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion2/27.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion2/28.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion2/29.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion2/210.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion2/211.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion2/212.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion2/213.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion2/214.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion2/215.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion2/216.jpg" alt=""></span>
                </div>
                <!--------------------------------------------------------------------------------------------------->
                <div class="image" data-name="Pavillions"><span><img src="images/pavillions/pavillion3/3.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion3/31.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/pavillions/pavillion3/32.jpg"
                            alt=""></span></div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion3/33.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/pavillions/pavillion3/34.jpg"
                            alt=""></span></div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion3/35.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/pavillions/pavillion3/36.jpg"
                            alt=""></span></div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion3/38.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/pavillions/pavillion3/39.jpg"
                            alt=""></span></div>
                <div class="image" data-name="Pavillions"><span><img src=" #images/cottages/pavillion3/310.jpg"
                            alt=""></span></div>
                <div class="image" data-name="Pavillions"><span><img src="images/pavillions/pavillion3/311.jpg"
                            alt=""></span></div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion3/312.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/pavillions/pavillion3/313.jpg"
                            alt=""></span></div>
                <!--------------------------------------------------------------------------------------------------->
                <div class="image" data-name="Pavillions"><span><img src="images/pavillions/pavillion4/4.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion4/42.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Pavillions"><span><img src="images/pavillions/pavillion4/43.jpg"
                            alt=""></span></div>
                <div class="image" data-name="Pavillions"><span><img src="images/cottages/pavillion4/44.jpg" alt=""></span>
                </div>
                <!-----------------------------SWIMMING POOLS------------------------------------------------------------->
                <div class="image" data-name="Swimming Pool"><span><img src="images/romecita/pool1.2.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Swimming Pool"><span><img src="images/romecita/pool1.3.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Swimming Pool"><span><img src="images/romecita/pool1.4.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Swimming Pool"><span><img src="images/romecita/pool1.jpg" alt=""></span></div>
                <div class="image" data-name="Swimming Pool"><span><img src="images/romecita/pool2.jpg" alt=""></span></div>
                <div class="image" data-name="Swimming Pool"><span><img src="images/romecita/pool2.3.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Swimming Pool"><span><img src="images/romecita/pool2.4.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Swimming Pool"><span><img src="images/romecita/pool2.5.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Swimming Pool"><span><img src="images/romecita/pool3.2.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Swimming Pool"><span><img src="images/romecita/pool3.4.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Swimming Pool"><span><img src="images/romecita/pool3.5.jpg" alt=""></span>
                </div>
                <!-----------------------------ROOMS------------------------------------------------------------------->
                <div class="image" data-name="Rooms"><span><img src="images/rooms/BAHAY KUBO/bk1.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/BAHAY KUBO/bk2.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/BAHAY KUBO/bk3.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/BAHAY KUBO/bk4.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/BAHAY KUBO/bk5.jpg" alt=""></span></div>
                <!--------------------------------------------------------------------------------------------------->
                <div class="image" data-name="Rooms"><span><img src="images/rooms/COUPLE ROOM/cr1.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/COUPLE ROOM/cr2.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/COUPLE ROOM/cr3.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/COUPLE ROOM/cr4.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/COUPLE ROOM/cr5.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/COUPLE ROOM/cr6.jpg" alt=""></span></div>
                <!--------------------------------------------------------------------------------------------------->
                <div class="image" data-name="Rooms"><span><img src="images/rooms/DOUBLE DECKER/dd1.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/DOUBLE DECKER/dd2.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/DOUBLE DECKER/dd3.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/DOUBLE DECKER/dd4.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/DOUBLE DECKER/dd5.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/DOUBLE DECKER/dd6.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/DOUBLE DECKER/dd7.jpg" alt=""></span>
                </div>
                <!--------------------------------------------------------------------------------------------------->
                <div class="image" data-name="Rooms"><span><img src="images/rooms/FAMILY HOUSE/fh1.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/FAMILY HOUSE/fh2.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/FAMILY HOUSE/fh3.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/FAMILY HOUSE/fh4.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/FAMILY HOUSE/fh5.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/FAMILY HOUSE/fh6.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/FAMILY HOUSE/fh7.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/FAMILY HOUSE/fh8.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/FAMILY HOUSE/fh9.jpg" alt=""></span></div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/FAMILY HOUSE/fh10.jpg" alt=""></span>
                </div>
                <!--------------------------------------------------------------------------------------------------->
                <div class="image" data-name="Rooms"><span><img src="images/rooms/KUBO W- ROOM/kwr1.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/KUBO W- ROOM/kwr2.jpg" alt=""></span>
                </div>
                <!--------------------------------------------------------------------------------------------------->
                <div class="image" data-name="Rooms"><span><img src="images/rooms/RESIDENTIAL ROOM/rr1.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/RESIDENTIAL ROOM/rr2.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/RESIDENTIAL ROOM/rr3.jpg" alt=""></span>
                </div>
                <div class="image" data-name="Rooms"><span><img src="images/rooms/RESIDENTIAL ROOM/rr4.jpg" alt=""></span>
                </div>
                <!--------------------------------------------------------------------------------------------------->



            </div>
        </div>
        <!-- fullscreen img preview box -->
        <div class="preview-box">
            <div class="details">
                <span class="title">Category: <p></p></span>
                <span class="icon fas fa-times"></span>
            </div>
            <div class="image-box"><img src="" alt=""></div>
        </div>
        <div class="shadow"></div>

        <script>
            //selecting all required elements
            const filterItem = document.querySelector(".items");
            const filterImg = document.querySelectorAll(".gallery .image");

            window.onload = () => { //after window loaded
                filterItem.onclick = (selectedItem) => { //if user click on filterItem div
                    if (selectedItem.target.classList.contains("item")) { //if user selected item has .item class
                        filterItem.querySelector(".active").classList.remove("active"); //remove the active class which is in first item
                        selectedItem.target.classList.add("active"); //add that active class on user selected item
                        let filterName = selectedItem.target.getAttribute("data-name"); //getting data-name value of user selected item and store in a filtername variable
                        filterImg.forEach((image) => {
                            let filterImges = image.getAttribute("data-name"); //getting image data-name value
                            //if user selected item data-name value is equal to images data-name value
                            //or user selected item data-name value is equal to "all"
                            if ((filterImges == filterName) || (filterName == "all")) {
                                image.classList.remove("hide"); //first remove the hide class from the image
                                image.classList.add("show"); //add show class in image
                            } else {
                                image.classList.add("hide"); //add hide class in image
                                image.classList.remove("show"); //remove show class from the image
                            }
                        });
                    }
                }
                for (let i = 0; i < filterImg.length; i++) {
                    filterImg[i].setAttribute("onclick", "preview(this)"); //adding onclick attribute in all available images
                }
            }

            //fullscreen image preview function
            //selecting all required elements
            const previewBox = document.querySelector(".preview-box"),
                categoryName = previewBox.querySelector(".title p"),
                previewImg = previewBox.querySelector("img"),
                closeIcon = previewBox.querySelector(".icon"),
                shadow = document.querySelector(".shadow");

            function preview(element) {
                //once user click on any image then remove the scroll bar of the body, so user cant scroll up or down
                document.querySelector("body").style.overflow = "hidden";
                let selectedPrevImg = element.querySelector("img").src; //getting user clicked image source link and stored in a variable
                let selectedImgCategory = element.getAttribute("data-name"); //getting user clicked image data-name value
                previewImg.src = selectedPrevImg; //passing the user clicked image source in preview image source
                categoryName.textContent = selectedImgCategory; //passing user clicked data-name value in category name
                previewBox.classList.add("show"); //show the preview image box
                shadow.classList.add("show"); //show the light grey background
                closeIcon.onclick = () => { //if user click on close icon of preview box
                    previewBox.classList.remove("show"); //hide the preview box
                    shadow.classList.remove("show"); //hide the light grey background
                    document.querySelector("body").style.overflow = "auto"; //show the scroll bar on body
                }
                
            }

            
        </script>

    </body>

    </html>