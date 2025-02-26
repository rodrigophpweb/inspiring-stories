<?php 
    require('header.php');
    require('controller.php');
?>

    <main class="flex-shrink-0 h-100">
        <?php include ('breadcrumb.php')?>

        <section class="container sampleTable">
            <?php include 'partials/listHistory.php'?>
        </section>

        <?php 
            include('paginator.php');
            //include('spinners.php');
            //include('alerts.php')
        ?> 
        
    </main>
    <?php include('modal.php');?>
    <?php include('footer.php')?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html> 