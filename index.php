<html>
<title>Virtual Tour</title>
<head>
    <script src='https://static.matterport.com/showcase-sdk/latest.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--<meta name='viewport' content='initial-scale=1, viewport-fit=cover'> --->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="landscp.css">

   
    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script> 

    <!--    Add Menu Items With types-->
    <?php
    /**
     * Type 1 =  tourmkr.com [Tourmkr Iframe]
     * Type 2 = Embed Google Street View Iframe
     * Type 3 = Matterport Model Link
     * Type 4 = Submenu
     */
    $menu = [
        array(
            "menu_content" => "Russley GoThru Virtual Tour",
            "type" => 1,
            "tourmkr_iframe" => "https://tourmkr.com/G1hwxzN1PN"
        ),

        array(
            "menu_content" => "Ranfurly Village",
            "type" => 4, // Refer the Submenu
            "submenu" => [
                array(
                    "menu_content" => "The Homestead - 3D View",
                    "type" => 3,
                    "uuid" => "", // UUID Required For Model Navigation
                    "rotation" => "0,0",
                    "association" => "", // Associated UUID of Same Model
                    "class" => "matterport_class", // Class Required Function Update
                    "model_frame" => "https://my.matterport.com/show/?m=AukBU9eTiwU&qs=1&play=1&sm=2&sr=-1.06,-.33,-.53&sp=-7.7,30.92,8.58"
                ),
                array(
                    "menu_content" => "Village Green",
                    "type" => 3,
                    "uuid" => "", // UUID Required For Model Navigation
                    "rotation" => "0,0",
                    "association" => "", // Associated UUID of Same Model
                    "class" => "matterport_class", // Class Required Function Update
                    "model_frame" => "https://my.matterport.com/show/?m=AukBU9eTiwU&qs=1&play=1&sr=-3.04,-1.36&ss=220"
                ),
                array(
                    "menu_content" => "Dining Spaces",
                    "type" => 3,
                    "uuid" => "e8870640358143bb94474984361d2d5b", // UUID Required For Model Navigation
                    "rotation" => "0,270",
                    "association" => "89fef4fc3bc94f74981b06215cf68ce9", // Associated UUID of Same Model
                    "class" => "matterport_class", // Class Required Function Update
                    "model_frame" => "https://my.matterport.com/show/?m=AukBU9eTiwU&qs=1&play=1&sr=.03,.81&ss=3"
                ),
                array(
                    "menu_content" => "Cinema",
                    "type" => 3,
                    "uuid" => "89fef4fc3bc94f74981b06215cf68ce9", // UUID Required For Model Navigation
                    "rotation" => "0,90",
                    "association" => "e8870640358143bb94474984361d2d5b", // Associated UUID of Same Model
                    "class" => "matterport_class", // Class Required Function Update
                    "model_frame" => "https://my.matterport.com/show/?m=AukBU9eTiwU&qs=1&play=1&sr=2.9,1.56&ss=170"
                ),
                ]   
            ),
        array(
            "menu_content" => "Wainui WalkInto Virtual Tour",
            "type" => 1,
            "tourmkr_iframe" => "https://walkinto.in/tour/-JL00VFdLQb1gURR4KuL7"
        ),
        array(
            "menu_content" => "Captur3D Virtual Tour",
            "type" => 1,
            "tourmkr_iframe" => "https://tour.topview.co.nz/view/the-russley-village/russley-village"
        ),
        array(
            "menu_content" => "Treedis Virtual Tour",
            "type" => 1,
            "tourmkr_iframe" => "https://my.treedis.com/tour/auckland-vision-studio"
        ),
        array(
            "menu_content" => "Google Street View - Type 1 - Works",
            "type" => 1,
            "tourmkr_iframe" => "https://www.google.com/maps/embed?pb=!4v1633471455253!6m8!1m7!1sP_c3zJPEtxK2Wo3LYWlvYQ!2m2!1d-36.85136626721487!2d174.7956216530993!3f96.42582176787803!4f5.9495473575534845!5f0.7820865974627469"
        ),
        array(
            "menu_content" => "Google Street View - Type 2 - Broken",
            "type" => 2,
            "gsv_frame" => "https://goo.gl/maps/nCXQkaYz41WkcxVYA"
        ),
        array(
            "menu_content" => "Google Street View - Type 2 v2 - Works",
            "type" => 2,
            "gsv_frame" => "https://www.google.com/maps/embed?pb=!4v1633471455253!6m8!1m7!1sP_c3zJPEtxK2Wo3LYWlvYQ!2m2!1d-36.85136626721487!2d174.7956216530993!3f96.42582176787803!4f5.9495473575534845!5f0.7820865974627469"
        ),
        array(
            "menu_content" => "Google Street View - Type 2 v3 - Broken",
            "type" => 2,
            "gsv_frame" => "https://www.google.com/maps/@-36.8513663,174.7956217,3a,75y,96.43h,95.95t/data=!3m6!1e1!3m4!1sP_c3zJPEtxK2Wo3LYWlvYQ!2e0!7i16384!8i8192"
        ),
        array(
            "menu_content" => "Matterport tour Sub-menu (Pacific Coast Village)",
            "type" => 4, // Refer the Submenu
            "submenu" => [
                array(
                    "menu_content" => "Matterport tour 2.1",
                    "type" => 3,
                    "uuid" => "1cecbbca8c5545cda4ad58e59f9f8897", // UUID Required For Model Navigation
                    "rotation" => "0,0",
                    "association" => "47bb08c4a9824ccab465c66ccd0f3b8f,f758a1fde59f410693a002f33b343983,e97086c82e384348b7738427c95fe8da,2b8a2f4c2ebf4ca3baa914b40bd2ab77", // Associated UUID of Same Model
                    "class" => "matterport_class", // Class Required Function Update
                    "model_frame" => "https://my.matterport.com/show/?m=nCFi8ShNxf3&sr=-3.09,-.74&ss=277&help=null&hl=0&nt=0&qs=1&ts=-1&brand=1&dh=1&gt=1&hr=1&mls=0&mt=1&f=1&lang=en&nozoom=1&wh=0&guides=1&kb=1&lp=0&mf=1&title=0&tourcta=1&vr=1&vrcoll=0&pin=1&portal=0&play=1&wh=0"
                ),
                array(
                    "menu_content" => "Matterport tour 2.2",
                    "type" => 3,
                    "uuid" => "47bb08c4a9824ccab465c66ccd0f3b8f", 
                    "rotation" => "0,180", 
                    "association" => "1cecbbca8c5545cda4ad58e59f9f8897,f758a1fde59f410693a002f33b343983,e97086c82e384348b7738427c95fe8da,2b8a2f4c2ebf4ca3baa914b40bd2ab77",
                    "class" => "matterport_class",
                    "model_frame" => "https://my.matterport.com/show/?m=nCFi8ShNxf3&sr=-3.05,-.04&ss=53&help=null&hl=0&nt=0&qs=1&ts=-1&brand=1&dh=1&gt=1&hr=1&mls=0&mt=1&f=1&lang=en&nozoom=1&wh=0&guides=1&kb=1&lp=0&mf=1&title=0&tourcta=1&vr=1&vrcoll=0&pin=1&portal=0&play=1&wh=0"
                ),
                array(
                    "menu_content" => "Matterport tour 2.3",
                    "type" => 3,
                    "uuid" => "f758a1fde59f410693a002f33b343983", 
                    "rotation" => "0,180", 
                    "association" => "1cecbbca8c5545cda4ad58e59f9f8897,47bb08c4a9824ccab465c66ccd0f3b8f,e97086c82e384348b7738427c95fe8da,2b8a2f4c2ebf4ca3baa914b40bd2ab77",
                    "class" => "matterport_class",
                    "model_frame" => "https://my.matterport.com/show/?m=nCFi8ShNxf3&help=null&hl=0&nt=0&qs=1&ts=-1&brand=1&dh=1&gt=1&hr=1&mls=0&mt=1&f=1&lang=en&nozoom=1&wh=0&guides=1&kb=1&lp=0&mf=1&title=0&tourcta=1&vr=1&vrcoll=0&pin=1&portal=0&play=1&sr=-3.13,-.34&ss=150"
                ),
                array(
                    "menu_content" => "Matterport tour 2.4",
                    "type" => 3,
                    "uuid" => "e97086c82e384348b7738427c95fe8da", 
                    "rotation" => "0,180", 
                    "association" => "1cecbbca8c5545cda4ad58e59f9f8897,47bb08c4a9824ccab465c66ccd0f3b8f,f758a1fde59f410693a002f33b343983,2b8a2f4c2ebf4ca3baa914b40bd2ab77",
                    "class" => "matterport_class",
                    "model_frame" => "https://my.matterport.com/show/?m=nCFi8ShNxf3&help=null&hl=0&nt=0&qs=1&ts=-1&brand=1&dh=1&gt=1&hr=1&mls=0&mt=1&f=1&lang=en&nozoom=1&wh=0&guides=1&kb=1&lp=0&mf=1&title=0&tourcta=1&vr=1&vrcoll=0&pin=1&portal=0&play=1&start=%7B%22camera_mode%22%3A1%2C%22camera_position%22%3A%7B%22x%22%3A-21.082843780517578%2C%22y%22%3A1.43558931350708%2C%22z%22%3A-8.298734664916992%7D%2C%22camera_quaternion%22%3A%7B%22x%22%3A0.00015455772705494364%2C%22y%22%3A-0.9956077947555764%2C%22z%22%3A0.0016438706856271024%2C%22w%22%3A0.09360765365618573%7D%2C%22scan_id%22%3A%22i4ahrbwqi2f74g49ze9ee66rd%22%7D"
                ),
                array(
                    "menu_content" => "Matterport tour 2.5",
                    "type" => 3,
                    "uuid" => "2b8a2f4c2ebf4ca3baa914b40bd2ab77",
                    "rotation" => "0,180", 
                    "association" => "1cecbbca8c5545cda4ad58e59f9f8897,47bb08c4a9824ccab465c66ccd0f3b8f,f758a1fde59f410693a002f33b343983,e97086c82e384348b7738427c95fe8da",
                    "class" => "matterport_class",
                    "model_frame" => "https://my.matterport.com/show/?m=nCFi8ShNxf3&help=null&hl=0&nt=0&qs=1&ts=-1&brand=1&dh=1&gt=1&hr=1&mls=0&mt=1&f=1&lang=en&nozoom=1&wh=0&guides=1&kb=1&lp=0&mf=1&title=0&tourcta=1&vr=1&vrcoll=0&pin=1&portal=0&play=1&start=%7B%22camera_mode%22%3A1%2C%22camera_position%22%3A%7B%22x%22%3A-20.985246658325195%2C%22y%22%3A1.4391393661499023%2C%22z%22%3A-3.9421138763427734%7D%2C%22camera_quaternion%22%3A%7B%22x%22%3A0.01039874040477079%2C%22y%22%3A0.7668150423901855%2C%22z%22%3A0.01242693371130943%2C%22w%22%3A-0.6416635631549192%7D%2C%22scan_id%22%3A%22df91rbx8cfrf15mf7ft0yimzd%22%7D"
                ),
            ]   
        ),
         array(
            "menu_content" => "The Ashley Suites",
            "type" => 3,
            "uuid" => "4f08b7d3b9c841c98d1f8bc1e7799329",
            "rotation" => "0,120",
            "association" => "40d88b4e8d0648d28d1ee9fd5cdcb18c,", 
            "class" => "matterport_class",
            "model_frame" => "https://my.matterport.com/show/?m=goUZwTePsAw&play=1&wh=0"
        ),
        array(
            "menu_content" => "Reception (The Ashley Suites)",
            "type" => 3,
            "uuid" => "40d88b4e8d0648d28d1ee9fd5cdcb18c",
            "rotation" => "2,50",
            "association" => "4f08b7d3b9c841c98d1f8bc1e7799329,",
            "class" => "matterport_class",
            "model_frame" => "https://my.matterport.com/show/?m=goUZwTePsAw&help=null&hl=0&nt=0&qs=1&ts=-1&brand=1&dh=1&gt=1&hr=1&mls=0&mt=1&f=1&lang=en&nozoom=1&wh=0&guides=1&kb=1&lp=0&mf=1&title=0&tourcta=1&vr=1&vrcoll=0&pin=1&portal=0&play=1&wh=0&sr=.02,.83&ss=175"
        ), 
        array(
            "menu_content" => "The Homestead",
            "type" => 3,
            "uuid" => "d224d48d501c489dacfed67d73ff1bd1", // UUID Required For Model Navigation
            "rotation" => "0,-150",
            "association" => "031ddb5c1ef542b7aba79ed97a53c932,0e4a6ec122214d3ca6777f39bc4087b4,256403f6e21b49828744767d9fb74956,97cc84b0ee524d1ba5bd51509256801d,d82128da3e8b4d0296ee25d586f7a344,84469c69af764122b0676be6cd03a631,efda6997341144a5bbfaa3ae48949e48,25f14357a8254bd3801f49692da21398", // Associated UUID of Same Model
            "class" => "matterport_class",
            "model_frame" => "https://my.matterport.com/show/?m=AcLejKiLC8r&play=1&wh=0"
        ),
        array(
            "menu_content" => "Snooker (The Homestead)",
            "type" => 3,
            "uuid" => "031ddb5c1ef542b7aba79ed97a53c932", // UUID Required For Sweep Navigation Movement
            "rotation" => "0,-130", // Rotation belong camera position
            "association" => "d224d48d501c489dacfed67d73ff1bd1,0e4a6ec122214d3ca6777f39bc4087b4,256403f6e21b49828744767d9fb74956,97cc84b0ee524d1ba5bd51509256801d,d82128da3e8b4d0296ee25d586f7a344,84469c69af764122b0676be6cd03a631,efda6997341144a5bbfaa3ae48949e48,25f14357a8254bd3801f49692da21398", // Association Required To link Location for Sweep In same Model
            "class" => "matterport_class",
            "model_frame" => "https://my.matterport.com/show/?m=AcLejKiLC8r&cloudEdit=1&start=%7B%22camera_mode%22%3A1%2C%22camera_position%22%3A%7B%22x%22%3A10.516849517822266%2C%22y%22%3A4.78788948059082%2C%22z%22%3A2.154869794845581%7D%2C%22camera_quaternion%22%3A%7B%22x%22%3A-0.004645626087888941%2C%22y%22%3A-0.9029277344850622%2C%22z%22%3A-0.009762835509495261%2C%22w%22%3A0.42965638770852577%7D%2C%22scan_id%22%3A%221zy88a107rpawkwhf7f586k1c%22%7D&help=null&hl=0&nt=0&qs=1&ts=-1&brand=1&dh=1&gt=1&hr=1&mls=0&mt=1&f=1&lang=en&nozoom=1&wh=0&guides=1&kb=1&lp=0&mf=1&title=0&tourcta=1&vr=1&vrcoll=0&pin=1&portal=0&play=1&wh=0"
        ),
        array(
            "menu_content" => "Library (The Homestead)",
            "type" => 3,
            "uuid" => "0e4a6ec122214d3ca6777f39bc4087b4",
            "rotation" => "0,45",
            "association" => "d224d48d501c489dacfed67d73ff1bd1,031ddb5c1ef542b7aba79ed97a53c932,256403f6e21b49828744767d9fb74956,97cc84b0ee524d1ba5bd51509256801d,d82128da3e8b4d0296ee25d586f7a344,84469c69af764122b0676be6cd03a631,efda6997341144a5bbfaa3ae48949e48,25f14357a8254bd3801f49692da21398",
            "class" => "matterport_class",
            "model_frame" => "https://my.matterport.com/show/?m=AcLejKiLC8r&cloudEdit=1&start=%7B%22camera_mode%22%3A1%2C%22camera_position%22%3A%7B%22x%22%3A-3.8539416790008545%2C%22y%22%3A0.9130351543426514%2C%22z%22%3A21.99401092529297%7D%2C%22camera_quaternion%22%3A%7B%22x%22%3A0.0016335308519460452%2C%22y%22%3A0.28382323322173586%2C%22z%22%3A-0.00048351866136876244%2C%22w%22%3A0.9588751066068094%7D%2C%22scan_id%22%3A%226kheckt7gf3by7bbe8gh957pc%22%7D&help=null&hl=0&nt=0&qs=1&ts=-1&brand=1&dh=1&gt=1&hr=1&mls=0&mt=1&f=1&lang=en&nozoom=1&wh=0&guides=1&kb=1&lp=0&mf=1&title=0&tourcta=1&vr=1&vrcoll=0&pin=1&portal=0&play=1&wh=0 "
        ),
        array(
            "menu_content" => "Matterport Tour inside The Homestead Retirement Village location (1)",
            "type" => 3,
            "uuid" => "256403f6e21b49828744767d9fb74956",
            "rotation" => "0,280",
            "association" => "d224d48d501c489dacfed67d73ff1bd1,031ddb5c1ef542b7aba79ed97a53c932,0e4a6ec122214d3ca6777f39bc4087b4,97cc84b0ee524d1ba5bd51509256801d,d82128da3e8b4d0296ee25d586f7a344,84469c69af764122b0676be6cd03a631,efda6997341144a5bbfaa3ae48949e48,25f14357a8254bd3801f49692da21398",
            "class" => "matterport_class",
            "model_frame" => "https://my.matterport.com/show/?m=AcLejKiLC8r&cloudEdit=1&help=null&hl=0&nt=0&qs=1&ts=-1&brand=1&dh=1&gt=1&hr=1&mls=0&mt=1&f=1&lang=en&nozoom=1&wh=0&guides=1&kb=1&lp=0&mf=1&title=0&tourcta=1&vr=1&vrcoll=0&pin=1&portal=0&play=1&applicationKey=a63kdth0chbk9f4sfnhd7tq7a&sr=-3.1,-1.47&ss=103"
        ),
        array(
            "menu_content" => "Matterport Tour inside The Homestead Retirement Village location (2)",
            "type" => 3, 
            "uuid" => "97cc84b0ee524d1ba5bd51509256801d", 
            "rotation" => "0,90",
            "association" => "d224d48d501c489dacfed67d73ff1bd1,031ddb5c1ef542b7aba79ed97a53c932,0e4a6ec122214d3ca6777f39bc4087b4,256403f6e21b49828744767d9fb74956,d82128da3e8b4d0296ee25d586f7a344,84469c69af764122b0676be6cd03a631,efda6997341144a5bbfaa3ae48949e48,25f14357a8254bd3801f49692da21398",
            "class" => "matterport_class",
            "model_frame" => "https://my.matterport.com/show/?m=AcLejKiLC8r&cloudEdit=1&help=null&hl=0&nt=0&qs=1&ts=-1&brand=1&dh=1&gt=1&hr=1&mls=0&mt=1&f=1&lang=en&nozoom=1&wh=0&guides=1&kb=1&lp=0&mf=1&title=0&tourcta=1&vr=1&vrcoll=0&pin=1&portal=0&play=1&applicationKey=a63kdth0chbk9f4sfnhd7tq7a&sr=-2.09,1.18&ss=63"
        ),
        array(
            "menu_content" => "Matterport Tour inside The Homestead Retirement Village location (3)", 
            "type" => 3, 
            "uuid" => "d82128da3e8b4d0296ee25d586f7a344", 
            "rotation" => "0,60", 
            "association" => "d224d48d501c489dacfed67d73ff1bd1,031ddb5c1ef542b7aba79ed97a53c932,0e4a6ec122214d3ca6777f39bc4087b4,256403f6e21b49828744767d9fb74956,97cc84b0ee524d1ba5bd51509256801d,84469c69af764122b0676be6cd03a631,efda6997341144a5bbfaa3ae48949e48,25f14357a8254bd3801f49692da21398",
            "class" => "matterport_class",
            "model_frame" => "https://my.matterport.com/show/?m=AcLejKiLC8r&play=1&wh=0&applicationKey=a63kdth0chbk9f4sfnhd7tq7a&start=%7B%22camera_mode%22%3A1%2C%22camera_position%22%3A%7B%22x%22%3A23.049192428588867%2C%22y%22%3A4.762269973754883%2C%22z%22%3A8.810775756835938%7D%2C%22camera_quaternion%22%3A%7B%22x%22%3A-0.24926867825343432%2C%22y%22%3A-0.14254882025706456%2C%22z%22%3A-0.03712308456971784%2C%22w%22%3A0.9571660443607132%7D%2C%22scan_id%22%3A%22cisu8u0uwta5e4issd04fu5qb%22%7D"
        ),
        array(
            "menu_content" => "Matterport Tour inside The Homestead Retirement Village location (4)", 
            "type" => 3, 
            "uuid" => "84469c69af764122b0676be6cd03a631", 
            "rotation" => "0,180", 
            "association" => "d224d48d501c489dacfed67d73ff1bd1,031ddb5c1ef542b7aba79ed97a53c932,0e4a6ec122214d3ca6777f39bc4087b4,256403f6e21b49828744767d9fb74956,97cc84b0ee524d1ba5bd51509256801d,d82128da3e8b4d0296ee25d586f7a344,efda6997341144a5bbfaa3ae48949e48,25f14357a8254bd3801f49692da21398",
            "class" => "matterport_class",
            "model_frame" => "https://my.matterport.com/show/?m=AcLejKiLC8r&play=1&wh=0&applicationKey=a63kdth0chbk9f4sfnhd7tq7a&start=%7B%22camera_mode%22%3A1%2C%22camera_position%22%3A%7B%22x%22%3A31.10394287109375%2C%22y%22%3A5.033921241760254%2C%22z%22%3A1.236196756362915%7D%2C%22camera_quaternion%22%3A%7B%22x%22%3A-0.002480760976058321%2C%22y%22%3A-0.9970920440029113%2C%22z%22%3A-0.06645064948141244%2C%22w%22%3A0.03722382025766103%7D%2C%22scan_id%22%3A%22ck2rsq42kdutuukhtg56n53ad%22%7D"
        ),
        array(
            "menu_content" => "Matterport Tour inside The Homestead Retirement Village location (5)", 
            "type" => 3, 
            "uuid" => "efda6997341144a5bbfaa3ae48949e48", 
            "rotation" => "0,300", 
            "association" => "d224d48d501c489dacfed67d73ff1bd1,031ddb5c1ef542b7aba79ed97a53c932,0e4a6ec122214d3ca6777f39bc4087b4,256403f6e21b49828744767d9fb74956,97cc84b0ee524d1ba5bd51509256801d,d82128da3e8b4d0296ee25d586f7a344,84469c69af764122b0676be6cd03a631,25f14357a8254bd3801f49692da21398",
            "class" => "matterport_class",
            "model_frame" => "https://my.matterport.com/show/?m=AcLejKiLC8r&play=1&wh=0&applicationKey=a63kdth0chbk9f4sfnhd7tq7a&start=%7B%22camera_mode%22%3A1%2C%22camera_position%22%3A%7B%22x%22%3A30.0390567779541%2C%22y%22%3A4.771490573883057%2C%22z%22%3A15.477838516235352%7D%2C%22camera_quaternion%22%3A%7B%22x%22%3A-0.19714994095088667%2C%22y%22%3A-0.34358430630883324%2C%22z%22%3A-0.0740134532482439%2C%22w%22%3A0.9152069350587385%7D%2C%22scan_id%22%3A%22fffcy3fxgq97iwhkke3zdz81d%22%7D"
        ),
        array(
            "menu_content" => "Matterport Tour inside The Homestead Retirement Village location (6)", 
            "type" => 3, 
            "uuid" => "25f14357a8254bd3801f49692da21398",
            "rotation" => "0,60", 
            "association" => "d224d48d501c489dacfed67d73ff1bd1,031ddb5c1ef542b7aba79ed97a53c932,0e4a6ec122214d3ca6777f39bc4087b4,256403f6e21b49828744767d9fb74956,97cc84b0ee524d1ba5bd51509256801d,d82128da3e8b4d0296ee25d586f7a344,84469c69af764122b0676be6cd03a631,efda6997341144a5bbfaa3ae48949e48",
            "class" => "matterport_class",
            "model_frame" => "https://my.matterport.com/show/?m=AcLejKiLC8r&play=1&wh=0&applicationKey=a63kdth0chbk9f4sfnhd7tq7a&start=%7B%22camera_mode%22%3A1%2C%22camera_position%22%3A%7B%22x%22%3A0.516810417175293%2C%22y%22%3A0.9117658138275146%2C%22z%22%3A4.754351615905762%7D%2C%22camera_quaternion%22%3A%7B%22x%22%3A0.000013668132025879045%2C%22y%22%3A0.9999722237610298%2C%22z%22%3A0.001896178116769176%2C%22w%22%3A-0.0072080530070926276%7D%2C%22scan_id%22%3A%22x80ei7zgy21e26ee40eqk4haa%22%7D"
        ),
    ];
    ?>
</head>


<body>
<nav role="navigation">
    <div id="menuToggle">
        <input type="checkbox"/>

        <span></span>
        <span></span>
        <span></span>

        <!-- Navigation Menu Starts -->
        <ul id="menu">
             <div class="topLogo">
              
                 <a href="#" target="_blank"> <img src="images/ttoplogo.png"  class="toplgo"/></a>
             </div>
            <?php
            foreach ($menu as $val) {

                switch ($val) {
                    case $val['type'] == 1: ?>
                        <li class="cont"><a href="#" class="lastTE"
                                            onclick="return load_view('<?php echo $val['tourmkr_iframe']; ?>')"> <?php echo $val['menu_content']; ?> </a>
                        </li>
                        <?php
                        break;
                    case $val['type'] == 2: ?>
                        <li class="cont"><a href="#" class="lastTE"
                                            onclick="return load_gsv_frame('<?php echo $val["gsv_frame"]; ?>')"> <?php echo $val['menu_content'] ?> </a>
                        </li>
                        <?php
                        break;
                    case $val['type'] == 3:
                        ?>
                        <li class="cont"><a href="#" id="<?php echo $val["uuid"]; ?>"
                                            frame="<?php echo $val["model_frame"]; ?>"
                                            rotation="<?php echo $val["rotation"]; ?>"
                                            assoc="<?php echo $val['association']; ?>"
                                            class="lastTE <?php echo $val["class"]; ?>"
                                            onclick="return load_model_frame('<?php echo $val["model_frame"]; ?>', '<?php echo $val["uuid"]; ?>')"> <?php echo $val['menu_content'] ?> </a>
                        </li>
                        <?php
                        break;
                    case $val['type'] == 4:
                        ?>
                        <ul class="menu-list accordion">
                            <li id="nav3" class="toggle accordion-toggle">
                                <div class="icon-plus"></div>
                                <a class="menu-link sub_men_content_itm" href="#"><?php echo $val['menu_content']; ?></a>
                            </li>
                            <ul class="menu-submenu accordion-content">
                                <?php foreach ($val['submenu'] as $s_val) {
                                    if ($s_val['type'] == 1) { ?>
                                        <li><a href="#" class="lastTE"
                                               onclick="return load_view('<?php echo $s_val['tourmkr_iframe']; ?>')"> <?php echo $s_val['menu_content']; ?> </a>
                                        </li>
                                    <?php } else if ($s_val['type'] == 2) { ?>
                                        <li><a href="#" class="lastTE"
                                               onclick="return load_gsv_frame('<?php echo $s_val["gsv_frame"]; ?>')"> <?php echo $s_val['menu_content'] ?> </a>
                                        </li>
                                    <?php } else if ($s_val['type'] == 3) { ?>
                                        <li><a href="#" id="<?php echo $s_val["uuid"]; ?>"
                                               frame="<?php echo $s_val["model_frame"]; ?>"
                                               rotation="<?php echo $s_val["rotation"]; ?>"
                                               assoc="<?php echo $s_val['association']; ?>"
                                               class="lastTE <?php echo $s_val["class"]; ?>"
                                               onclick="return load_model_frame('<?php echo $s_val["model_frame"]; ?>', '<?php echo $s_val["uuid"]; ?>')"> <?php echo $s_val['menu_content'] ?> </a>
                                        </li>
                                    <?php }
                                } ?>
                            </ul>
                        </ul>
                        <?php
                        break;
                }
            }
            ?>

            <div class="BtomClick">
              
                 <a href="#" target="_blank"> Click Here</a>
             </div>
        </ul>

        <!--- Navigation Menu Ends --->
    </div>


    <?php if (!empty($menu[0]["tourmkr_iframe"])) { ?>
        <iframe src="<?php echo $menu[0]["tourmkr_iframe"]; ?>" id="showcase" title="test" frameBorder="0"
                allowFullScreen
                style="
    width: 100% !IMPORTANT;
    height: 100%!IMPORTANT;"></iframe>
    <?php } else { ?>
        <iframe id="showcase" title="test" frameBorder="0" allowFullScreen allow="xr-spatial-tracking"></iframe>
    <?php } ?>

    <div class="allowFullScreenicon" style="display: none;">
        <a href="#"><img src="images/fullscreenb.svg " class="msizeimg"></a>
    </div>
</nav>


<div onclick="myFunction()" class="showHed" style="display: none;">
    <img src="https://img.icons8.com/material-outlined/24/000000/menu--v3.png"/>
</div>


<div id="myDIV">
    <div id="matterport_menu" style="display: none; position:absolute;">

    </div>
</div>

</body>

</html>
<script>
    //initiate Style 
    initiate_st();

    function initiate_st() {
        $("li").last().addClass("hr_remov");
        var m_height = $("#menu").height();
        var w_height = $(window).height();

        if (m_height > w_height) {
            $("#menu").attr("style", `height: ${(parseInt(w_height)-parseInt(60))}px !important; overflow-y: scroll;`);
        }
    }

    (function ($) {
        $.fn.hasScrollBar = function () {
            return this.get(0).scrollHeight > this.height();
        }
    })(jQuery);

    $(window).resize(function () {
        var m_height = $("#menu").height();
        var w_height = $(window).height();

        $("#menu").attr("style", `height: ${(parseInt(w_height) - parseInt(60))}px !important;`);
        var scroll_bar = $('#menu').hasScrollBar();

        if(!scroll_bar){
            $("#menu").attr("style", `height: auto !important;`);
            console.log("Scroll Bar: ", scroll_bar);
        }

        if (m_height > w_height) {
            $("#menu").addClass("scroll_menu_items");
        } 
    });


    // Handle Navigation Menu Click
    function load_view(frame) {
        $('.matterport_class').click(load_matterport_model_frame);
        var iframe = document.getElementById('showcase');
        var iframe_src = `${frame}`;
        iframe.setAttribute('src', iframe_src);
        console.log("IFrame Loaded Successfully!");
    }

    // Handle Google Iframe Navigation
    function load_gsv_frame(gsv) {
        $('.matterport_class').click(load_matterport_model_frame);

        console.log("Iframe Src ", gsv);
        var gsv_iframe = document.getElementById('showcase');
        var iframe_src = `${gsv}`;
        gsv_iframe.setAttribute('src', iframe_src+"&output=embed");
    }

    // Matter Port Model Loading Function
    function load_matterport_model_frame() {
        var uuid = $(this).attr('id');
        var assc_frame = $(this).attr("frame");
        load_model_frame(assc_frame, uuid)
        return false;
    }

    // Handle Model Frame
    function load_model_frame(frame, uuid) {

        var showcase;
        var iframe = document.getElementById('showcase');
        var text = document.getElementById('text');
        var button = document.getElementById('button');

// this key only works from jsfiddle.
        var SDK_Key = "a63kdth0chbk9f4sfnhd7tq7a";
        var sdkVersion = "3.5";


        var settings = {
            sweep: '',
            mode: 'INSIDE',
            transition: 'FLY'
        };

        var iframe_src = frame;
        iframe_src = iframe_src.replace(/\s/g, '');
        iframe_src = iframe_src.concat(`&applicationKey=${SDK_Key}`);
        iframe.setAttribute('src', iframe_src);

        // Initialize showcase SDK when iframe has loaded
        iframe.addEventListener('load', showcaseLoader, true);

        function showcaseLoader() {
            // Connect to SDK with applicationKey and iframe element
            try {
                window.MP_SDK.connect(iframe, SDK_Key, sdkVersion)
                    .then(loadedShowcaseHandler)
                    .catch(handleError);
            } catch (e) {
                console.error(e);
            }

        }


        function loadedShowcaseHandler(response) {
            // Define showcase and event listeners
            showcase = response;
            showcase.Sweep.current.subscribe(function (currentSweep) {
                // Change to the current sweep has occurred.

                console.log(`%c ${currentSweep.uuid} `, 'background: #222; color: #bada55');

                if (currentSweep) {
                    console.log("current Sweep --------------------> ", currentSweep);
                    mapClickEvent(currentSweep.uuid);
                    var assc = $('#' + currentSweep.uuid).attr('assoc');
                    assc = assc.split(",");
                    assc.map(x => {
                        mapClickEvent(x);
                    })
                }
            });


        }

        function sweepMove() {
            var uuid = $(this).attr('id');
            var assc_frame = $(this).attr("frame");
            var rotation_var = $(this).attr("rotation").split(",");
            console.log("Move to ------------ ", uuid);

            // sweep extracts sweep ID from the clicked element's value,
            // transition is defined by value in settings object
            // rotation.x rotates camera vertically (up and down)
            // rotation.y rotates camera horizonally (left and right)
            const transitionTime = 2000; // in milliseconds
            let rotation;

            if (rotation_var) {
                rotation = {x: rotation_var[0], y: rotation_var[1]};
            } else {
                rotation = {x: rotation_var[0], y: rotation_var[1]};
            }
            console.log("rotation -----> ", rotation); 

            return showcase.Sweep.moveTo(
                uuid, {
                    rotation: rotation,
                    transition: showcase.Sweep.Transition[settings.transition],
                    transitionTime: transitionTime,
                })
                .then(handleMessage)
                .catch(function (err) {
                    console.log("Error ------------- ", err);
                    load_model_frame(assc_frame, uuid);
                });

        }

        function scaleToContainer(num, min, max, scale, offset) {
            // calculate position as percentage with left and top offset
            // return ( ((num - min) / (max - min)) * 78 ) + 6;
            return (((num - min) / (max - min)) * scale) + offset;
        }

        function mapClickEvent(uuid) {
            if (uuid) {
                $("#" + uuid).removeAttr("onclick");
                $("#" + uuid).off("click", load_matterport_model_frame)
                $("body").off("click", "#" + uuid, load_matterport_model_frame)
                document.getElementById(uuid).addEventListener("click", sweepMove); 
                console.log("OFF load_matterport_model_frame--->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> ON", uuid)
            }
        }


        function handleMessage(message) {
            console.log("message ---------->", message);
        }

        function handleError(err) {
            console.error("Error --------->", err);
        }


    }

    // Navigation Menu

    $(function () {
        function slideMenu() {
            var activeState = $("#menu-container .menu-list").hasClass("active");
            $("#menu-container .menu-list").animate({left: activeState ? "0%" : "-100%"}, 400);
        }

        $("#menu-wrapper").click(function (event) {
            event.stopPropagation();
            $("#hamburger-menu").toggleClass("open");
            $("#menu-container .menu-list").toggleClass("active");
            slideMenu();

            $("body").toggleClass("overflow-hidden");
        });

        $(".menu-list").find(".accordion-toggle").click(function () {
            $(this).next().toggleClass("open").slideToggle("fast");
            $(this).toggleClass("active-tab").find(".menu-link").toggleClass("active");

            $(".menu-list .accordion-content").not($(this).next()).slideUp("fast").removeClass("open");
            $(".menu-list .accordion-toggle").not(jQuery(this)).removeClass("active-tab").find(".menu-link").removeClass("active");
        });
    }); // jQuery load

</script>

  


