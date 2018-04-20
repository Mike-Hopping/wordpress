<?php
/**
 * Created by PhpStorm.
 * User: 845856208
 * Date: 10/04/2018
 * Time: 1:35 PM
 */
?>
<?php get_header();
    $testimonials_text = get_theme_mod('pistoncranky_testimonials_text');
?>
<div class="text-container">
    <div class="testimonials">
        <div class="testimonials-text">
    <h1>Testimonials</h1>
            <?php if($testimonials_text || is_customize_preview()):
                echo wpautop($testimonials_text);
            endif; ?>
<!--    <br>-->
<!--    <h4>Dear Bill and Karen</h4>-->
<!--    <p>“Our company has been using your firm's services for about eight years, since our original mechanic retired to the Marlborough Sounds.-->
<!---->
<!--        I have always found both you and your team a knowledgeable and hard-working bunch who are a pleasure to deal with. Keeping a fleet of rental cars and six First Direct Taxis on the road can be a trial at the best of times, but has been made much easier by your efforts.-->
<!---->
<!--        When I first became a customer, Bill and I discussed our requirements and he saw immediately why it was so important that our vehicles come in on time for their 10,000 km checks and that everything that might need fixing between services is done then, not at 11pm on a Saturday night.-->
<!---->
<!--        As such your team have consistently done a 'nose-to-tail' inspection of each vehicle every service and our unscheduled maintenance has dropped to practically nil. This has been good for both our customers and, just as importantly, our bank account.-->
<!---->
<!--        I look forward to continuing our relationship with you at you new premises at Piston Cranky Motors and wish you all the best.”</p>-->
<!--    <h4>Best Regards-->
<!--            <br>-->
<!--            Charley Cowie<br>-->
<!--            Managing Director<br>-->
<!--            CICNZ Transport Services Ltd.</h4>-->
<!--    <br>-->
<!--    <p>“It is without hesitation that we acknowledge and fully support Piston Cranky Motors (The PC Automotive Company).-->
<!---->
<!--        Piston Cranky Motors (previously known as Aylesford Automotive (2001) Ltd) are the best fully automotive community workshop in Christchurch. They have been servicing our fleet of vehicles for 9 years and never a complaint.-->
<!---->
<!--        Their quality of workmanship combined with their pleasant attitude and respect for the customer is without question - THEY CARE.”</p>-->
<!--    <h4>-->
<!--            Norm JW Dewes<br>-->
<!--            Chief Executive Officer<br>-->
<!--            Te Raunanga o Nga Maata Waka-->
<!--        </h4>-->
<!--    <br>-->
<!--    <p>“While our large fleet of business vehicles is maintained under a national maintenance plan, as a family we choose to use Aylesford Automotive for maintenance and repair on personal vehicles.-->
<!---->
<!--        This has been the case for a number of years now, and we've always found Aylesford Automotive to be friendly, prompt and efficient, with a wide knowledge of vehicle requirements and an ability to source parts readily – even for a 1968 Mustang! I do not recall ever having to return a vehicle a second time for the same repair.-->
<!---->
<!--        I have great trust in Aylesford Automotives ability, and have no hesitation in recommending them to anyone who wants quality work done at an honest price.-->
<!---->
<!--        We wish them well in their expansion into modern premises and we will certainly continue to be loyal and supportive clients.”</p>-->
<!--    <h4>-->
<!--            Graeme Rhind<br>-->
<!--            Chief operating Officer New Zealand-->
<!--        </h4>-->
        </div>
    </div>
</div>
<?php get_footer(); ?>