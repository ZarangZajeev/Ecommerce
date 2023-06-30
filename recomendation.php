
<html>
<head>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <style>
    .MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
  </style>
</head>
<body>

<div class="container">
		<h2>Featured <b>Products</b></h2>
	<div class="row">
		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">

							<?php
							$db_host		= 'localhost';
							$db_user		= 'root';
							$db_pass		= '';
							$db_database	= 'shopping_db';
							/* End config */

							$con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
							$uid = $_SESSION['login_customer'];


							$sql="create temporary table ub_rank as
							select similar.user_id,count(*) rank
							from recomendation target
							join recomendation similar on target.pro_id= similar.pro_id and target.user_id != similar.user_id
							where target.user_id = '$uid'
							group by similar.user_id;";
							mysqli_query($con, $sql);

							$sql="select similar.pro_id, sum(ub_rank.rank) total_rank
							from ub_rank
							join recomendation similar on ub_rank.user_id = similar.user_id
							left join recomendation target on target.user_id = '$uid' and target.pro_id = similar.pro_id
							where target.pro_id is null
							group by similar.pro_id
							order by total_rank desc;";

							// Execute multi query
							$result=mysqli_query($con, $sql);
							      while ($row = mysqli_fetch_row($result)) {
							        $id=$row[0];

							        $sql = "SELECT * FROM product_tbl WHERE pro_id = '$id'" or die (mysqli_error($con));
							        $res1=mysqli_query($con, $sql);
							        $len = mysqli_fetch_array($res1);

							        $sql = "SELECT * FROM pro_dtl_tbl WHERE pro_id = '$id'" or die (mysqli_error($con));
							        $res2=mysqli_query($con, $sql);
							        $bre = mysqli_fetch_array($res2);

							      ?>
                <div class="item">

                    <div class="pad15">
											<form action="infohead.php" method="get">
												<button name="info" type="submit" value="<?php echo $bre['pro_id'];?>">
													<img src="<?php echo $len['image']?>"/>
                        	<p class="lead"><?php echo $len['name'];?></p>
                        	<p>₹ <?php echo $bre['prize'];?></p>
                        	<p><strike>₹ <?php echo $bre['mrp'];?></strike></p>
											</button>
										</form>

                    </div>

                </div>
							<?php } ?>
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
	</div>

</div>
<script>
$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script>
</body>
</html>
