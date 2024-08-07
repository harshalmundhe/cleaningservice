<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function about() {
        return view('frontend.about');
    }
    public function blog() {
        $posts = Post::paginate();
        return view('frontend.blog', ['posts' => $posts]);
    }
    public function contact() {
        return view('frontend.contact');
    }
    public function estimate() {
        return view('frontend.estimate');
    }

    public function estimateAdd(Request $request) {


        DB::table('estimate')
            ->insert([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'p_type' => $request->p_type,
                'no_bed_bath' => $request->no_bed_bath,
                'f_type' => $request->f_type,
                's_room' => $request->s_room,
                'clean_service_period' => $request->clean_service_period,
                'clean_service_period_other' => $request->clean_service_period_other,
                'clean_service' => (!empty($request->clean_service))?json_encode($request->clean_service):null,
                'clean_service_other' => $request->clean_service_other,
                'pets' => $request->pets,
                'pet_type' => $request->pet_type,
                'allergies_sensitives' => $request->allergies_sensitives,
                'present' => $request->present,
                'access' => $request->access,
                'attension' => $request->attension,
                'hear' => $request->hear,
                'extra' => $request->extra,
                'extra' => $request->extra,
                'created_at' => date('Y-m-d H:i:s')
            ]);

            $clean_service = '';
            if(!empty($request->clean_service)) {
                $clean_service = implode('<br>', json_decode($request->clean_service, true));
            }

            $message = '<div class="row">
                        <div class="col">Name</div>
                        <div class="col"> {{  $request->name }} </div>
                    </div>

                    <hr><div class="row">
                        <div class="col">Phone</div>
                        <div class="col"> {{  $request->phone }} </div>
                    </div>

                    <hr><div class="row">
                        <div class="col">Email</div>
                        <div class="col"> {{  $request->email }} </div>
                    </div>

                    
                    <hr><div class="row">
                        <div class="col">Type of property</div>
                        <div class="col"> {{  $request->p_type }} </div>
                        </select>
                    </div>

                    <hr><div class="row">
                        <div class="col">Number of bedroom/bathroom</div>
                        <div class="col"> {{  $request->no_bed_bath }} </div>
                    </div>

                    <hr><div class="row">
                        <div class="col">Flooring Type</div>
                        <div class="col"> {{  $request->f_type }} </div>
                    </div>

                    <hr><div class="row">
                        <div class="col">Any Special Room</div>
                        <div class="col"> {{  $request->s_room }} </div>
                    </div>

                    <hr><div class="row">
                        <div class="col">How often would you like Cleaning Service</div>
                        <div class="col"> {{  $request->clean_service_period }} </div>
                    </div>

                    
                    <hr><div class="row">
                        <div class="col">Other</div>
                        <div class="col"> {{  $request->clean_service_period_other }} </div>
                    </div>


                    <hr><div class="row">
                        <div class="col">What Specific cleaning service are you interested in?</div>
                        <div class="col"> '. $clean_service .' </div>
                    </div>

                    
                    <hr><div class="row">
                        <div class="col">Other</div>
                        <div class="col"> {{  $request->clean_service_other }} </div>
                    </div>

                    
                    <hr><div class="row">
                        <div class="col">Do you have pets in house?</div>
                        <div class="col"> {{  $request->pets }} </div>
                    </div>

                    <hr><div class="row">
                        <div class="col">Pet type</div>
                        <div class="col"> {{  $request->pet_type }} </div>
                    </div>

                    
                    <hr><div class="row">
                        <div class="col">Are there any allergies or sensitives that our cleaner should be aware of?</div>
                        <div class="col"> {{  $request->allergies_sensitives }} </div>
                    </div>

                    <hr><div class="row">
                        <div class="col">Will someone be present during cleaning sessions</div>
                        <div class="col"> {{  $request->present }} </div>
                    </div>

                    
                    <hr><div class="row">
                        <div class="col">How will our team access the property</div>
                        <div class="col"> {{  $request->access }} </div>

                    </div>


                    <hr><div class="row">
                        <div class="col">Are there any spefic areas or items you want our team to pay extra attension to</div>
                        <div class="col"> {{  $request->attension }} </div>
                    </div>


                    <hr><div class="row">
                        <div class="col">Do you have any addition request or prefrences related to cleaing service</div>
                        <div class="col"> {{  $request->request }} </div>
                    </div>


                    <hr><div class="row">
                        <div class="col">How did you hear about us?</div>
                        <div class="col"> {{  $request->hear }} </div>

                    </div>

                    <hr><div class="row">
                        <div class="col">Is there anything else you\'d like to share or ask regrading cleaning service</div>
                        <div class="col"> {{  $request->extra }} </div>

                    </div>';

        $to = $request->email . "," . env('ADMIN_EMAIL');
        $subject = "New Estimate";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        $headers .= env('EMAIL_FROM') . "\r\n";

        mail($to, $subject, $message, $headers);
        return redirect()->back()->with('success', 'Inserted Successfully');
    }
}
