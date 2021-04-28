$(document).ready(function(){
 

    $(document).on('click',' .tab-menu li a',function(e){
        var tabindex = $(this).parent().index();
        var leftpos = 0;
        for(var i=0;i<tabindex;i++){
            leftpos = leftpos + $('.tab-menu li').eq(i).outerWidth() - 1;
        }
        $('.tab-menu').animate({ scrollLeft: leftpos},500);
    });


    $(document).on('click','.pr-tab-contain .tab-menu ul li a',function(e){
        var course_tabindex = $(this).parent().index();
        var course_leftpos = 0;
        for(var i=0;i<course_tabindex;i++){
            course_leftpos = course_leftpos + $('.pr-tab-contain .tab-menu ul li').eq(i).outerWidth();
        }
        $('.pr-tab-contain .tab-menu ul').animate({ scrollLeft: course_leftpos},500);
    });


  
});




