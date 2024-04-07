<?php 
include('admin/config.php');
$currentPage = 'watersportsPage'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Start Header Section -->
            <?php include('./components/header.php') ?>
        <!-- End Header Section -->
        <title>Buddy Hikers</title>
    </head>
    <body class="pageBg">
        
        <?php 
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * from `treks` where id = '{$_GET['id']}' ");
	foreach($qry->fetch_array() as $k => $v){
		if(!is_numeric($k)){
			$$k = $v;
		}
	}
}
?>

    
        <!-- Start Header Section -->
            <?php include('./components/menu.php') ?>
        <!-- End Header Section -->


         <div class="package-details-area  mtb80 position-relative">
            <div class="container">
                <div class="row">
                    <div class="co-lg-12">
                        <div class="package-img-group mb-50">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-6">
                                    <div class="gallery-img-wrap">
                                        <img src="<?php echo validate_image(isset($image1) ? $image1:'') ?>" alt />
                                        <a data-fancybox="gallery-01" href="<?php echo validate_image(isset($image1) ? $image1:'') ?>"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 h-100">
                                    <div class="row g-3 h-100">
                                        <div class="col-6">
                                            <div class="gallery-img-wrap">
                                                <img src="<?php echo validate_image(isset($image2) ? $image2:'') ?>" alt />
                                                <a data-fancybox="gallery-01" href="<?php echo validate_image(isset($image2) ? $image2:'') ?>"><i class="bi bi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="gallery-img-wrap">
                                                <img src="<?php echo validate_image(isset($image3) ? $image3:'') ?>" alt />
                                                <a data-fancybox="gallery-01" href="<?php echo validate_image(isset($image2) ? $image3:'') ?>"><i class="bi bi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="gallery-img-wrap active">
                                                <img src="<?php echo validate_image(isset($image4) ? $image4:'') ?>" alt />
                                                <a data-fancybox="gallery-01" href="<?php echo validate_image(isset($image4) ? $image4:'') ?>"><i class="bi bi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="gallery-img-wrap active">
                                                <img src="<?php echo validate_image(isset($image5) ? $image5:'') ?>" alt />
                                                <a data-fancybox="gallery-01" href="<?php echo validate_image(isset($image5) ? $image5:'') ?>"><i class="bi bi-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="row g-xl-4 gy-5">
                    <div class="col-xl-8">
                       <section class="room-details-area bg-white mb-20">
                        <h4>Details</h4>
                        <ul class="room-features">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24" class="text-h5"><path fill="currentColor" fill-rule="evenodd" d="M12 4a5 5 0 00-5 5c0 2.788 1.612 6.867 5 10.555 3.388-3.688 5-7.767 5-10.555a5 5 0 00-5-5zM5 9a7 7 0 0114 0c0 3.652-2.164 8.579-6.293 12.707a1 1 0 01-1.414 0C7.164 17.58 5 12.652 5 9z" clip-rule="evenodd"></path><path fill="currentColor" fill-rule="evenodd" d="M12 10a1 1 0 100-2 1 1 0 000 2zm0 2a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                                <div class="facility">
                                    <p>Pickup & Drop</p>
                                    <h5><?php echo isset($pickup_drop) ? $pickup_drop : '' ?></h5>
                                </div>
                            </li>

                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 27 24" class="text-h6"><path fill="currentColor" d="M10.833 17.333V16h-9.32l-.014 5.333A2.657 2.657 0 004.166 24h18.667a2.657 2.657 0 002.666-2.667V16h-9.333v1.333h-5.333zm13.333-12h-5.347V2.667L16.153 0h-5.334L8.153 2.667v2.666h-5.32A2.675 2.675 0 00.166 8v4a2.657 2.657 0 002.667 2.667h8V12h5.333v2.667h8c1.467 0 2.667-1.2 2.667-2.667V8c0-1.467-1.2-2.667-2.667-2.667zm-8 0h-5.333V2.667h5.333v2.666z"></path></svg>
                                 <div class="facility">
                                     <p>Category</p>
                                     <h5>Water Sports</h5>
                                 </div>
                             </li>

                             <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 25 24" class="text-h5"><path fill="currentColor" fill-rule="evenodd" d="M12.335 21.333a9.333 9.333 0 100-18.666 9.333 9.333 0 000 18.666zm0 2.334C18.778 23.667 24 18.443 24 12S18.778.333 12.335.333C5.89.333.668 5.557.668 12s5.223 11.667 11.667 11.667z" clip-rule="evenodd"></path><path fill="currentColor" d="M12.335 6.167c-.645 0-1.167.522-1.167 1.166v5.834c0 .644.522 1.166 1.167 1.166H17a1.167 1.167 0 000-2.333h-3.5V7.333c0-.644-.522-1.166-1.166-1.166z"></path></svg>
                                 <div class="facility">
                                     <p>Duration</p>
                                     <h5><?php echo isset($duration) ? $duration : '' ?></h5>
                                 </div>
                             </li>
                             <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24" class="text-h5"><path fill="currentColor" d="M14 6l-3.75 5 2.85 3.8-1.6 1.2C9.81 13.75 7 10 7 10l-6 8h22L14 6z"></path></svg>
                                 <div class="facility">
                                     <p>Altitude</p>
                                     <h5><?php echo isset($altitude) ? $altitude : '' ?></h5>
                                 </div>
                             </li>
                             <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24" class="text-h5"><path fill="currentColor" d="M11 6H9V4h2v2zm4-2h-2v2h2V4zM9 14h2v-2H9v2zm10-4V8h-2v2h2zm0 4v-2h-2v2h2zm-6 0h2v-2h-2v2zm6-10h-2v2h2V4zm-6 4V6h-2v2h2zm-6 2V8h2V6H7V4H5v16h2v-8h2v-2H7zm8 2h2v-2h-2v2zm-4-2v2h2v-2h-2zM9 8v2h2V8H9zm4 2h2V8h-2v2zm2-4v2h2V6h-2z"></path></svg>
                                 <div class="facility">
                                     <p>Difficulty</p>
                                     <h5><?php echo isset($difficulty) ? $difficulty : '' ?></h5>
                                 </div>
                             </li>
                             <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  viewBox="0 0 24 24" class="text-h5"><path fill="currentColor" d="M19.5 21a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM17 5.92L9 2v18H7v-1.73c-1.79.35-3 .99-3 1.73 0 1.1 2.69 2 6 2s6-.9 6-2c0-.99-2.16-1.81-5-1.97V8.98l6-3.06z"></path></svg>
                                 <div class="facility">
                                     <p>Trek Length</p>
                                     <h5><?php echo isset($trek_length) ? $trek_length : '' ?></h5>
                                 </div>
                             </li>
                            
                        </ul>
                        
                       </section>

                       <section class="bg-white mb-20">
                      
                                <ul class="trustBadge">
                                    <li>
                                        <p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 28 28"><path fill="currentColor" d="M26.32 6A31.84 31.84 0 0114.735.853a1.333 1.333 0 00-1.466 0A31.84 31.84 0 011.68 6 1.333 1.333 0 00.668 7.547c1.466 8.733 5.826 15.506 12.64 19.6a1.333 1.333 0 001.333 0c6.813-4.094 11.173-10.867 12.64-19.6A1.333 1.333 0 0026.32 6zM14 24.427A24.32 24.32 0 013.535 8.307 32.44 32.44 0 0014.001 3.6a32.44 32.44 0 0010.467 4.707A24.321 24.321 0 0114 24.427z"></path><path fill="currentColor" d="M11.24 13.347a1.332 1.332 0 00-1.893 0 1.333 1.333 0 000 1.88l2.386 2.386c.249.247.584.386.934.387.35-.002.685-.14.933-.387l5.493-5.506a1.333 1.333 0 00-1.88-1.88l-4.546 4.546-1.427-1.426z"></path></svg></p>
                                        <h6>Safe Travel </h6>
                                    </li>
                                    <li>
                                        <p><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 28 28"><g fill="currentColor" clip-path="url(#clip0_645_22049)"><path d="M6.588 1.637v2.47c0 .454.37.824.823.824.453 0 .824-.37.824-.823v-2.47A.826.826 0 007.41.813a.826.826 0 00-.823.823zm13.176 0v2.47c0 .454.371.824.824.824.453 0 .823-.37.823-.823v-2.47a.826.826 0 00-.823-.824.826.826 0 00-.824.823z"></path><path d="M25.53 3.284h-2.47V4c0 1.195-.801 2.297-1.973 2.53a2.477 2.477 0 01-2.969-2.421v-.824H9.883V4c0 1.195-.8 2.297-1.973 2.53a2.477 2.477 0 01-2.968-2.421v-.824h-2.47c-.907 0-1.648.741-1.648 1.647V25.52c0 .906.741 1.647 1.647 1.647l23.034.02c.91.001 1.647-.735 1.648-1.645l.024-20.61c0-.906-.741-1.647-1.647-1.647zm0 21.42a.823.823 0 01-.824.824l-21.412-.009a.826.826 0 01-.823-.823V9.872a.82.82 0 01.824-.823h21.412a.82.82 0 01.823.823v14.832z"></path><path d="M19.238 12.04a1.646 1.646 0 00-2.329 0l-2.953 2.953-2.953-2.953a1.646 1.646 0 10-2.33 2.329l2.954 2.953-2.953 2.953a1.646 1.646 0 102.329 2.33l2.953-2.954 2.953 2.953a1.647 1.647 0 102.33-2.329l-2.954-2.953 2.953-2.953a1.646 1.646 0 000-2.33z"></path></g><defs><clipPath id="clip0_645_22049"><path fill="currentColor" d="M0 0H28V28H0z"></path></clipPath></defs></svg></p>
                                        <h6>Flexible Cancellation</h6>
                                    </li>
                                    <li>
                                        <p><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  viewBox="0 0 57 57"><g> <path d="M44.9585 37.6918C48.6714 33.6856 50.9451 28.3275 50.9451 22.4476C50.945 10.0703 40.8753 0.000488281 28.4979 0.000488281C16.1204 0.000488281 6.05078 10.0703 6.05078 22.4476C6.05078 28.7806 8.68794 34.5087 12.9206 38.5937L7.38832 50.4764C7.31739 50.6287 7.28955 50.7976 7.30784 50.9646C7.32613 51.1316 7.38984 51.2904 7.49206 51.4238C7.59427 51.5572 7.73108 51.66 7.88762 51.721C8.04416 51.7821 8.21444 51.7991 8.37996 51.7702L15.1691 50.5839L18.6319 56.5429C18.7163 56.6882 18.8389 56.8076 18.9864 56.8881C19.1339 56.9686 19.3006 57.0072 19.4685 56.9995C19.6363 56.9919 19.7989 56.9384 19.9385 56.8449C20.0781 56.7514 20.1894 56.6213 20.2603 56.469L25.7285 44.7238C26.6362 44.836 27.5603 44.8947 28.4979 44.8947C29.8465 44.8947 31.1676 44.7749 32.4513 44.5459L36.5784 54.128C36.6449 54.2823 36.7523 54.4155 36.8892 54.513C37.026 54.6105 37.1869 54.6687 37.3545 54.6811C37.5221 54.6936 37.6899 54.6599 37.8396 54.5837C37.9894 54.5075 38.1154 54.3917 38.2039 54.2488L41.838 48.3928L48.5897 49.7755C48.7543 49.8094 48.9251 49.7975 49.0833 49.741C49.2416 49.6845 49.3813 49.5856 49.4872 49.4551C49.5933 49.3248 49.6616 49.1679 49.6847 49.0016C49.7079 48.8352 49.685 48.6656 49.6186 48.5113L44.9585 37.6918ZM19.3368 54.0961L16.437 49.106C16.3425 48.9435 16.2005 48.8139 16.0301 48.7346C15.8597 48.6553 15.6691 48.63 15.4839 48.6623L9.79863 49.6558L14.3564 39.8662C17.0693 42.0729 20.3052 43.6597 23.8469 44.4088L19.3368 54.0961ZM7.88948 22.4476C7.88948 11.0841 17.1344 1.83919 28.4979 1.83919C39.8614 1.83919 49.1063 11.0841 49.1063 22.4476C49.1063 33.8111 39.8614 43.056 28.4979 43.056C17.1344 43.056 7.88948 33.8111 7.88948 22.4476ZM41.5791 46.4632C41.3949 46.4254 41.2036 46.4449 41.0309 46.5193C40.8582 46.5937 40.7126 46.7193 40.6135 46.8791L37.5704 51.7829L34.2781 44.1389C37.7785 43.2053 40.9453 41.4459 43.5549 39.0813L47.233 47.6211L41.5791 46.4632ZM43.9487 28.7742C43.9047 28.4062 43.8637 28.0788 43.8268 27.7849C43.6769 26.5904 43.6018 25.9911 43.6854 25.517C43.7691 25.0429 44.0447 24.5052 44.594 23.4342C44.7291 23.1705 44.8797 22.8769 45.0468 22.5463C45.9182 20.8224 45.5574 18.7759 44.1489 17.454C43.8787 17.2004 43.6368 16.9761 43.4196 16.7745C42.5372 15.9558 42.0942 15.545 41.8535 15.1281C41.6129 14.7112 41.4784 14.1222 41.2108 12.9486C41.1448 12.6597 41.0715 12.3382 40.9869 11.9773C40.5464 10.0966 38.9545 8.76087 37.0258 8.65353C36.6559 8.63285 36.3264 8.61653 36.0305 8.60182C34.8282 8.54195 34.2247 8.51195 33.7723 8.34727C33.32 8.18248 32.8384 7.81773 31.8789 7.09075C31.6143 6.88984 31.3491 6.68977 31.0832 6.49053C29.5367 5.33307 27.4589 5.33307 25.9123 6.49053C25.6156 6.71255 25.3527 6.91182 25.1165 7.09075C24.1571 7.81761 23.6754 8.18248 23.2231 8.34727C22.7707 8.51195 22.1672 8.54183 20.9651 8.60182C20.6691 8.61653 20.3397 8.63296 19.9698 8.65353C18.0411 8.76087 16.4492 10.0966 16.0086 11.9773C15.9241 12.3381 15.8507 12.6597 15.7849 12.9485C15.5171 14.1221 15.3827 14.7111 15.142 15.1281C14.9014 15.545 14.4584 15.9558 13.576 16.7744C13.3322 17.0002 13.0891 17.2267 12.8466 17.454C11.4382 18.7759 11.0773 20.8224 11.9488 22.5463C12.116 22.8769 12.2664 23.1705 12.4015 23.4342C12.9509 24.5052 13.2265 25.0429 13.3101 25.517C13.3938 25.9911 13.3185 26.5905 13.1687 27.7849C13.1319 28.079 13.0908 28.4062 13.0468 28.7742C12.8175 30.6921 13.8565 32.4917 15.6323 33.2523C15.9729 33.3982 16.2769 33.5263 16.55 33.6414C17.6592 34.1087 18.216 34.3434 18.5848 34.6529C18.9535 34.9624 19.2813 35.4698 19.9342 36.4811C20.0949 36.73 20.2739 37.0071 20.4768 37.3173C21.2935 38.5661 22.6445 39.2743 24.0694 39.2742C24.4889 39.2742 24.9152 39.2127 25.3358 39.0857C25.6904 38.9784 26.0056 38.8812 26.2887 38.7939C27.4389 38.4389 28.0163 38.2608 28.4977 38.2608C28.979 38.2608 29.5564 38.4389 30.7067 38.7939C30.9898 38.8812 31.3051 38.9784 31.6596 39.0857C33.5086 39.6445 35.4614 38.9338 36.5186 37.3172C36.7215 37.007 36.9004 36.7299 37.0612 36.481C37.7141 35.4697 38.0419 34.9621 38.4107 34.6528C38.7794 34.3434 39.3362 34.1087 40.4454 33.6413C40.7185 33.5262 41.0225 33.3981 41.3632 33.2521C43.139 32.4917 44.178 30.6921 43.9487 28.7742ZM42.9579 22.595C41.6933 25.0612 41.6576 25.2638 42.0025 28.0136C42.0389 28.3043 42.0796 28.6283 42.123 28.9923C42.2567 30.1101 41.6742 31.1188 40.6394 31.562C40.3023 31.7064 40.0016 31.833 39.7314 31.9469C37.1776 33.0231 37.02 33.1554 35.5167 35.4835C35.3387 35.7598 35.1598 36.0355 34.98 36.3107C34.3639 37.2528 33.2694 37.6512 32.1917 37.3254C31.8409 37.2194 31.529 37.1232 31.2489 37.0368C28.6007 36.2196 28.395 36.2195 25.7467 37.0368C25.4667 37.1232 25.1548 37.2194 24.8039 37.3254C23.7261 37.6515 22.6318 37.2528 22.0157 36.3107C21.815 36.004 21.6379 35.7297 21.479 35.4835C19.9756 33.1553 19.8181 33.0231 17.2642 31.9469C16.994 31.8331 16.6933 31.7064 16.3562 31.562C15.3214 31.1188 14.739 30.11 14.8726 28.9923C14.9161 28.6283 14.9568 28.3044 14.9933 28.0136C15.3382 25.2637 15.3024 25.0612 14.0379 22.595C13.9041 22.3342 13.7553 22.0438 13.5899 21.7166C13.0821 20.712 13.2842 19.565 14.1051 18.7945C14.3725 18.5436 14.6118 18.3217 14.8267 18.1223C16.8583 16.2375 16.9612 16.0594 17.5776 13.3573C17.6428 13.0716 17.7154 12.7534 17.7989 12.3964C18.0557 11.3003 18.9479 10.5516 20.0719 10.4891C20.4379 10.4688 20.7638 10.4526 21.0565 10.438C23.8246 10.3002 24.0179 10.2298 26.227 8.5562C26.4606 8.37922 26.7208 8.18213 27.0143 7.96241C27.4649 7.62512 27.9814 7.45654 28.4979 7.45654C29.0143 7.45654 29.5308 7.62524 29.9815 7.96241C30.275 8.18202 30.535 8.37922 30.7687 8.5562C32.9778 10.2298 33.1711 10.3002 35.9391 10.438C36.2318 10.4526 36.5578 10.4689 36.9237 10.4891C38.0478 10.5516 38.94 11.3003 39.1967 12.3964C39.2804 12.7534 39.3529 13.0717 39.4182 13.3574C40.0346 16.0594 40.1374 16.2375 42.1692 18.1223C42.3841 18.3217 42.6234 18.5437 42.8907 18.7945C43.7115 19.565 43.9137 20.712 43.4058 21.7166C43.2575 22.0099 43.1082 22.3027 42.9579 22.595ZM36.3851 19.3822L31.4686 19.1425L29.7215 14.5408C29.5272 14.0289 29.0468 13.698 28.4979 13.698C27.9488 13.698 27.4684 14.0289 27.2742 14.5408L25.5271 19.1425L20.6108 19.3822C20.0628 19.4088 19.5991 19.7631 19.4295 20.2849C19.2599 20.8068 19.4266 21.366 19.8543 21.7098L23.6908 24.7934L22.3995 29.5433C22.2556 30.0726 22.4495 30.623 22.8933 30.9455C23.1164 31.1088 23.3856 31.1971 23.6621 31.1976C23.9104 31.1976 24.1593 31.1258 24.3794 30.9817L28.4979 28.286L32.6162 30.9819C33.0753 31.2824 33.6587 31.268 34.1026 30.9457C34.5464 30.6231 34.7402 30.0727 34.5962 29.5435L33.3049 24.7937L37.1416 21.71C37.5692 21.3662 37.7359 20.807 37.5662 20.2852C37.3966 19.7633 36.9329 19.4089 36.3851 19.3822ZM28.0026 15.1936C28.0026 15.1934 28.0026 15.1934 28.0026 15.1936V15.1936ZM31.8827 23.5777C31.6841 23.7372 31.5364 23.9511 31.4577 24.1933C31.379 24.4356 31.3727 24.6955 31.4396 24.9412L32.4558 28.6793L29.2147 26.5578C29.0017 26.4182 28.7525 26.3439 28.4978 26.3439C28.2431 26.3439 27.994 26.4182 27.7809 26.5577L24.5397 28.6793L25.5562 24.9408C25.6229 24.6951 25.6165 24.4353 25.5377 24.1932C25.459 23.9511 25.3114 23.7372 25.1129 23.5777L22.0936 21.1508L25.9624 20.9621C26.2169 20.9499 26.4622 20.8636 26.6684 20.7139C26.8745 20.5642 27.0325 20.3576 27.1229 20.1194L28.4979 16.498L29.8729 20.1197C29.9633 20.3578 30.1212 20.5643 30.3272 20.714C30.5333 20.8637 30.7785 20.9499 31.0329 20.9623L34.9021 21.151L31.8827 23.5777Z"></path></g> </svg></p>
                                        <h6>Certified Leaders</h6>
                                    </li>
                                    <li>
                                        <p><svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28"> <g> <path d="M25.2816 4.26374L18.7906 4.60392L18.605 1.06333C18.5968 0.906822 18.5268 0.759987 18.4103 0.655121C18.2938 0.550256 18.1405 0.495951 17.984 0.504153L9.72258 0.937114C9.56608 0.945316 9.41924 1.01535 9.31438 1.13182C9.20951 1.24828 9.15521 1.40164 9.16341 1.55814L9.34896 5.09873L2.85787 5.43892C2.38836 5.46352 1.94785 5.67364 1.63326 6.02303C1.31866 6.37242 1.15575 6.83248 1.18035 7.30199L1.39683 11.4327L4.34733 11.2781L4.28548 10.0979C4.27727 9.94136 4.33158 9.788 4.43645 9.67154C4.54131 9.55507 4.68815 9.48504 4.84465 9.47684L7.20505 9.35313C7.36155 9.34493 7.5149 9.39924 7.63137 9.5041C7.74783 9.60897 7.81787 9.7558 7.82607 9.91231L7.88792 11.0925L20.8701 10.4121L20.8083 9.23194C20.8001 9.07543 20.8544 8.92208 20.9592 8.80562C21.0641 8.68915 21.2109 8.61912 21.3674 8.61091L23.7278 8.48721C23.8843 8.47901 24.0377 8.53331 24.1541 8.63818C24.2706 8.74304 24.3407 8.88988 24.3489 9.04638L24.4107 10.2266L27.3612 10.072L27.1447 5.94126C27.1201 5.47175 26.91 5.03124 26.5606 4.71664C26.2112 4.40205 25.7512 4.23913 25.2816 4.26374ZM10.3745 2.08639L17.4557 1.71528L17.6104 4.66577L10.5292 5.03688L10.3745 2.08639ZM24.5344 12.587C24.5426 12.7435 24.4883 12.8968 24.3834 13.0133C24.2786 13.1298 24.1317 13.1998 23.9752 13.208L21.6148 13.3317C21.4583 13.3399 21.305 13.2856 21.1885 13.1807C21.0721 13.0759 21.002 12.929 20.9938 12.7725L20.932 11.5923L7.94978 12.2727L8.01163 13.4529C8.01983 13.6094 7.96552 13.7628 7.86066 13.8792C7.75579 13.9957 7.60896 14.0657 7.45245 14.0739L5.09206 14.1976C4.93555 14.2058 4.7822 14.1515 4.66574 14.0467C4.54927 13.9418 4.47923 13.795 4.47103 13.6385L4.40918 12.4583L1.45868 12.6129L2.13905 25.5951C2.16366 26.0646 2.37377 26.5051 2.72316 26.8197C3.07256 27.1343 3.53261 27.2972 4.00213 27.2726L26.4259 26.0974C26.8954 26.0728 27.3359 25.8627 27.6505 25.5133C27.9651 25.1639 28.128 24.7038 28.1034 24.2343L27.4231 11.2522L24.4726 11.4068L24.5344 12.587ZM20.1847 19.9156C20.1929 20.0721 20.1386 20.2254 20.0338 20.3419C19.9289 20.4584 19.7821 20.5284 19.6255 20.5366L16.6751 20.6912L16.8297 23.6417C16.8379 23.7982 16.7836 23.9516 16.6787 24.068C16.5738 24.1845 16.427 24.2546 16.2705 24.2628L13.32 24.4174C13.1635 24.4256 13.0102 24.3713 12.8937 24.2664C12.7772 24.1615 12.7072 24.0147 12.699 23.8582L12.5444 20.9077L9.59386 21.0623C9.43736 21.0705 9.284 21.0162 9.16754 20.9114C9.05108 20.8065 8.98104 20.6597 8.97284 20.5032L8.81821 17.5527C8.81001 17.3962 8.86431 17.2428 8.96918 17.1263C9.07404 17.0099 9.22088 16.9398 9.37738 16.9316L12.3279 16.777L12.1732 13.8265C12.165 13.67 12.2194 13.5167 12.3242 13.4002C12.4291 13.2837 12.5759 13.2137 12.7324 13.2055L15.6829 13.0509C15.8394 13.0427 15.9928 13.097 16.1092 13.2018C16.2257 13.3067 16.2957 13.4535 16.3039 13.61L16.4586 16.5605L19.4091 16.4059C19.5656 16.3977 19.7189 16.452 19.8354 16.5569C19.9519 16.6617 20.0219 16.8086 20.0301 16.9651L20.1847 19.9156Z"></path></g> </svg></p>
                                        <h6>Medical Support.</h6>
                                    </li>
                                  
                                </ul>
                           
                       </section>

                       <section class="bg-white mb-20">
                        <h4>Overview </h4>
                        <p>
                          <?php echo isset($overviewcontent) ? $overviewcontent : '' ?>
                        </p>
                       
                           
                       </section>

                       <section class="bg-white mb-20">
                        
                        <h4>Itinerary</h4>
                        <div class="accordion tour-plan" id="tourPlan">
                            <?php
                            
                            $n=1;
                            $qry = $conn->query("SELECT * FROM `Itinerary`  where commonid = '{$_GET['id']}' AND `Itineraryfor`='Watersports' " );
                            $num=$qry->num_rows;
                            if($num>0){
                            while($row= $qry->fetch_assoc()):
                            
                            
                            ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $n;?>" aria-expanded="true" aria-controls="collapse<?php echo $n;?>"><span>Day 0<?php echo $n;?> :</span> <?php echo $row['activity']; ?></button>
                                </h2>
                                <div id="collapse<?php echo $n;?>" class="accordion-collapse collapse <?php if($n==1){ echo 'show'; }?>" aria-labelledby="heading<?php echo $n;?>" data-bs-parent="#tourPlan">
                                    <div class="accordion-body">
                                        <p>
                                          <?php echo $row['description'];?>
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                           
                           	<?php $n++; endwhile; } ?>
                           
                          
                        </div>
                       </section>

                       <section class="bg-white mb-20">
                        <h4>Inclusions &  Exclusions</h4>
                        <div class="includ-and-exclud-area mb-20">
                             <ul>
                                <?php
            					 
            					 $n=1;
            					 $qry = $conn->query("SELECT * FROM `includeandexclude`  where commonid = '{$_GET['id']}' AND `includeandexcludefor`='Watersports' " );
            					 $num=$qry->num_rows;
            				
            					 while($row= $qry->fetch_assoc()):
            					 
            					 
            					 ?>
                                <li><i class="bi bi-check-lg"></i><?php echo $row['included'] ?></li>
                               
                               <?php  endwhile; ?>
                            </ul>
                            <ul class="exclud">
                                <?php
            					 
            					 $n=1;
            					 $qry = $conn->query("SELECT * FROM `includeandexclude`  where commonid = '{$_GET['id']}' AND `includeandexcludefor`='Watersports' " );
            					 $num=$qry->num_rows;
            					
            					 while($row= $qry->fetch_assoc()):
            					 
            					 
            					 ?>
                                <li><i class="bi bi-check-lg"></i><?php echo $row['excluded'] ?></li>
                               
                               <?php  endwhile; ?>
                            </ul>
                        </div>
                       </section>

                       <section class="bg-white mb-20">
                        <!-- <h4>Things To Pack</h4> -->
                       
                        <div class="accordion tour-plan" id="tourPlan">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="padding: 15px;"> Things To Pack</button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#tourPlan" style="">
                                    <div class="accordion-body">
                                        <ul class="thingsPackList">
                                            <li>
                                               <h6>Rucksack:</h6> 
                                               <p>You must pick a good quality backpack with a comfortable fit and straps that won’t give you shoulder pain. You can check out your nearest Decathlon store for a good trekking backpack.</p>
                                            </li>
                                            <li>
                                                <h6>Rucksack:</h6> 
                                                <p>You must pick a good quality backpack with a comfortable fit and straps that won’t give you shoulder pain. You can check out your nearest Decathlon store for a good trekking backpack.</p>
                                             </li>
                                             <li>
                                                <h6>Day Bag / Day Pack:</h6> 
                                                <p>When you head towards the summit, you are required to carry only a few necessary items and for that, you need a day backpack as you will leave your bigger one on the campsite.</p>
                                             </li>
                                             <li>
                                                <h6>Hiking Shoes:</h6> 
                                                <p>Durable footwear designed for rugged terrains.</p>
                                             </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                          
                         
                        </div>
                        
                       </section>

                    </div>
                    <div class="col-xl-4 sidebar">
                        <div class="booking-form-wrap mb-40">
                           
                            <div class="tab-content" id="v-pills-tabContent2">
                              
                                    <div class="sidebar-booking-form">
                                       
                                        <div class="card-content-bottom priceTable">
                                            <div class="price-area mb-20">
                                                <h6>Starting Price:</h6>
                                                <span class="cusPrice">₹<?php echo isset($starting_price) ? $starting_price : '' ?></span>
                                                <span class="cusCont"><?php echo isset($persontotal) ? $persontotal : '' ?>  person</span>
                                            </div>
                                            <button type="submit" class="primary-btn1 two">Book Now</button>
                                        </div>
                                        

                                      
                                        <div class="booking-form-item-type">
                                            <h5>Batches</h5>
                                            <div class="checkbox-container">
                                                <?php
                                                
                                                $n=1;
                                                $qry = $conn->query("SELECT * FROM `batches`  where commonid = '{$_GET['id']}' AND `batchesfor`='Watersports' " );
                                                $num=$qry->num_rows;
                                                if($num>0){
                                                while($row= $qry->fetch_assoc()):
                                                
                                                
                                                ?>
                                                <label class="check-container">
                                                    <span><?php echo $row['date_range'] ?></span>
                                                    <span class="<?php if($row['availity']=='Available'){ echo 'btnAvilable'; }else{ echo 'btnClose'; } ?>"><?php echo $row['availity'];?>  </span>
                                                </label>
                                             	<?php $n++; endwhile; } ?>
                                            </div>
                                        </div>
                                        
                                         
                                       
                                    </div>
                              
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <!-- ~~~ Footer Section ~~~ -->
		<?php include('./components/faqs.php') ?>
        <!-- End Footer Section -->
    
        <!-- ~~~ Footer Section ~~~ -->
		<?php include('./components/footer.php') ?>
        <!-- End Footer Section -->
       
    </body>

   
</html>
