<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\PartnerVisa;
use App\Models\Visa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Slider;
use App\Models\Service;
use Mail;
class ContactController extends Controller
{
    public function register(Request $request)
    {
        $check = User::where('email',$request->email)->first();
      
        if($check)
        {
            session()->flash('msg','User Already exist in this email');
            return redirect()->back();
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::login($user);
        return redirect()->route('adminmain');
    }

    public function login(Request $request)
    {
        if(Auth::check())

        {
            return redirect()->route('adminmain'); 
        }        
        $check = User::where('email',$request->email)->first();
      
      
        if(!$check)
        {
            session()->flash('msg','User not registered in this email');
            return redirect()->back();
        }
        
        if(Hash::check($request->password,$check->password))
        {
            Auth::login($check);
            return redirect()->route('adminmain');
        }
        else
        {
            session()->flash('msg','Wrong Password');
            return redirect()->back();
        }
       
    }
    
    public function who(Request $request)
    {
        $check = Service::where('title','whowithare')->latest('id')->first();
        if($check)
        {
            $check->description = $request->description;
            $check->save();
            return redirect()->back();
        }

        $service = new Service;
        $service->title = 'whowithare';
        $service->description = $request->description;
        $service->save();
        return redirect()->back();
    }
    public function home()
    {
        $slider = Slider::latest('id')->first();
        $service = Service::where('title','whowithare')->latest('id')->first();

        $visa = Visa::all();
    //    $data = array('name'=>"Virat Gandhi");
    //     Mail::send('mail', $data, function($message) {
    //      $message->to('tufailkhan5093@gmail.com', 'Tutorials Point')->subject
    //         ('Laravel Basic Testing Mail');
    //      $message->from('xyz@gmail.com','Virat Gandhi');
    //   });
        return view('home',['slider'=>$slider,'service'=>$service,'visa'=>$visa]);
    }
    public function contact(Request $request)
    {
        
        $contact = new Contact;
        $contact->name = $request->cname;
        $contact->email = $request->cemail;
        $contact->phone = $request->cphone;
        $contact->question = $request->subject;
        $contact->message = $request->cmessage;
        $contact->save();
        $email = 'tufailkhan5093@gmail.com';
        $data = array(
            'name'=>$request->cname,
            'email'=>$request->cemail,
            'phone'=>$request->cphone,
            'question'=>$request->subject,
            'messages'=>$request->cmessage,   
        );
       $arrayEmails = ['tufailkhan5093@gmail.com'];
        $emailSubject = 'My Subject';
        $emailBody = 'Hello, this is my message content.';
         Mail::send('mail',$data,function($message) use ($arrayEmails, $emailSubject) {
            $message->to($arrayEmails)
            ->subject($emailSubject);
        }
);
        return redirect()->back();
    }

    public function webpartnership(Request $request)
    {
        $check = Visa::where('title','partner')->latest('id')->first();
        if($check)
        {
            $check->description = $request->description;
            $imageName = rand(0000,99999).'.'.$request->image->extension();  
    
            $request->image->move(public_path('images'), $imageName);
            $check->image=$imageName;
            $check->save();
            return redirect()->back();
        }
       
        $visa = new Visa;
        $visa->description = $request->description;
        $visa->title = 'partner';
        $imageName = rand(0000,99999).'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        $visa->image=$imageName;
        $visa->save();
        return redirect()->back();
    }

    public function webpartnershipget()
    {
        $check = Visa::where('title','partner')->latest('id')->first();
        return view('services/partner-visa',['check'=>$check]);
    }

     public function parentvisa(Request $request)
    {
        
        $check = Visa::where('title','parent')->latest('id')->first();
        if($check)
        {
            $check->description = $request->description;
            $imageName = rand(0000,99999).'.'.$request->image->extension();  
    
            $request->image->move(public_path('images'), $imageName);
            $check->image=$imageName;
            $check->save();
            return redirect()->back();
        }
       
        $visa = new Visa;
        $visa->title = 'parent';
        $visa->description = $request->description;
        $imageName = rand(0000,99999).'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        $visa->image=$imageName;
        $visa->save();
        return redirect()->back();
    }

     public function parentvisaget()
    {
        $check = Visa::where('title','parent')->latest('id')->first();
        return view('services/parent-visa',['check'=>$check]);
    }

     public function childvisa(Request $request)
    {
        
        $check = Visa::where('title','child')->latest('id')->first();
        if($check)
        {
            $check->description = $request->description;
            $imageName = rand(0000,99999).'.'.$request->image->extension();  
    
            $request->image->move(public_path('images'), $imageName);
            $check->image=$imageName;
            $check->save();
            return redirect()->back();
        }
       
        $visa = new Visa;
        $visa->title = 'child';
        $visa->description = $request->description;
        $imageName = rand(0000,99999).'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        $visa->image=$imageName;
        $visa->save();
        return redirect()->back();
    }

     public function childvisaget()
    {
        $check = Visa::where('title','child')->latest('id')->first();
        return view('services/child-visa',['check'=>$check]);
    }

    public function carervisa(Request $request)
    {
        
        $check = Visa::where('title','carer')->latest('id')->first();
        if($check)
        {
            $check->description = $request->description;
            $imageName = rand(0000,99999).'.'.$request->image->extension();  
    
            $request->image->move(public_path('images'), $imageName);
            $check->image=$imageName;
            $check->save();
            return redirect()->back();
        }
       
        $visa = new Visa;
        $visa->title = 'carer';
        $visa->description = $request->description;
        $imageName = rand(0000,99999).'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        $visa->image=$imageName;
        $visa->save();
        return redirect()->back();
    }
 public function carervisaget(Request $request)
    {
        $check = Visa::where('title','child')->latest('id')->first();
        return view('services/carer-visa',['check'=>$check]);
    }
 public function skillvisaget(Request $request)
    {
        $check = Visa::where('title','skill')->latest('id')->first();
        return view('services/skilled-visa',['check'=>$check]);
    }

public function skillvisa(Request $request)
    {
        
        $check = Visa::where('title','skill')->latest('id')->first();
        if($check)
        {
            $check->description = $request->description;
            $imageName = rand(0000,99999).'.'.$request->image->extension();  
    
            $request->image->move(public_path('images'), $imageName);
            $check->image=$imageName;
            $check->save();
            return redirect()->back();
        }
       
        $visa = new Visa;
        $visa->title = 'skill';
        $visa->description = $request->description;
        $imageName = rand(0000,99999).'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        $visa->image=$imageName;
        $visa->save();
        return redirect()->back();
    }

    public function workvisa(Request $request)
    {
        
        $check = Visa::where('title','work')->latest('id')->first();
        if($check)
        {
            $check->description = $request->description;
            $imageName = rand(0000,99999).'.'.$request->image->extension();  
    
            $request->image->move(public_path('images'), $imageName);
            $check->image=$imageName;
            $check->save();
            return redirect()->back();
        }
       
        $visa = new Visa;
        $visa->title = 'work';
        $visa->description = $request->description;
        $imageName = rand(0000,99999).'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        $visa->image=$imageName;
        $visa->save();
        return redirect()->back();
    }

    public function workvisaget(Request $request)
    {
        $check = Visa::where('title','work')->latest('id')->first();
        return view('services/work-visa',['check'=>$check]);
    }

     public function businessvisa(Request $request)
    {
        
        $check = Visa::where('title','business')->latest('id')->first();
        if($check)
        {
            $check->description = $request->description;
            $imageName = rand(0000,99999).'.'.$request->image->extension();  
    
            $request->image->move(public_path('images'), $imageName);
            $check->image=$imageName;
            $check->save();
            return redirect()->back();
        }
       
        $visa = new Visa;
        $visa->title = 'business';
        $visa->description = $request->description;
        $imageName = rand(0000,99999).'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        $visa->image=$imageName;
        $visa->save();
        return redirect()->back();
    }

    public function businessvisaget(Request $request)
    {
        $check = Visa::where('title','business')->latest('id')->first();
        return view('services/business-visa',['check'=>$check]);
    }

    //   public function workvisaget(Request $request)
    // {
    //     $check = Visa::where('title','work')->latest('id')->first();
    //     return view('services/work-visa',['check'=>$check]);
    // }

     public function studentvisa(Request $request)
    {
        
        $check = Visa::where('title','student')->latest('id')->first();
        if($check)
        {
            $check->description = $request->description;
            $imageName = rand(0000,99999).'.'.$request->image->extension();  
    
            $request->image->move(public_path('images'), $imageName);
            $check->image=$imageName;
            $check->save();
            return redirect()->back();
        }
       
        $visa = new Visa;
        $visa->title = 'student';
        $visa->description = $request->description;
        $imageName = rand(0000,99999).'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        $visa->image=$imageName;
        $visa->save();
        return redirect()->back();
    }

    public function studentvisaget(Request $request)
    {
        $check = Visa::where('title','student')->latest('id')->first();
        return view('services/student-visa',['check'=>$check]);
    }

     public function visitorvisa(Request $request)
    {
        
        $check = Visa::where('title','visitor')->latest('id')->first();
        if($check)
        {
            $check->description = $request->description;
            $imageName = rand(0000,99999).'.'.$request->image->extension();  
    
            $request->image->move(public_path('images'), $imageName);
            $check->image=$imageName;
            $check->save();
            return redirect()->back();
        }
       
        $visa = new Visa;
        $visa->title = 'visitor';
        $visa->description = $request->description;
        $imageName = rand(0000,99999).'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        $visa->image=$imageName;
        $visa->save();
        return redirect()->back();
    }

    public function visitorvisaget(Request $request)
    {
        $check = Visa::where('title','visitor')->latest('id')->first();
        return view('services/visitor-visa',['check'=>$check]);
    }



      public function residentvisa(Request $request)
    {
        
        $check = Visa::where('title','resident')->latest('id')->first();
        if($check)
        {
            $check->description = $request->description;
            $imageName = rand(0000,99999).'.'.$request->image->extension();  
    
            $request->image->move(public_path('images'), $imageName);
            $check->image=$imageName;
            $check->save();
            return redirect()->back();
        }
       
        $visa = new Visa;
        $visa->title = 'resident';
        $visa->description = $request->description;
        $imageName = rand(0000,99999).'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        $visa->image=$imageName;
        $visa->save();
        return redirect()->back();
    }

    public function residentvisaget(Request $request)
    {
        $check = Visa::where('title','resident')->latest('id')->first();
        return view('services/residentreturn-visa',['check'=>$check]);
    }


    public function appeal(Request $request)
    {
        
        $check = Visa::where('title','appeal')->latest('id')->first();
        if($check)
        {
            $check->description = $request->description;
            $imageName = rand(0000,99999).'.'.$request->image->extension();  
    
            $request->image->move(public_path('images'), $imageName);
            $check->image=$imageName;
            $check->save();
            return redirect()->back();
        }
       
        $visa = new Visa;
        $visa->title = 'appeal';
        $visa->description = $request->description;
        $imageName = rand(0000,99999).'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        $visa->image=$imageName;
        $visa->save();
        return redirect()->back();
    }

    public function appealget(Request $request)
    {
        $check = Visa::where('title','resident')->latest('id')->first();
        return view('services/appeals',['check'=>$check]);
    }


        public function citizen(Request $request)
    {
        
        $check = Visa::where('title','citizen')->latest('id')->first();
        if($check)
        {
            $check->description = $request->description;
            $imageName = rand(0000,99999).'.'.$request->image->extension();  
    
            $request->image->move(public_path('images'), $imageName);
            $check->image=$imageName;
            $check->save();
            return redirect()->back();
        }
       
        $visa = new Visa;
        $visa->title = 'citizen';
        $visa->description = $request->description;
        $imageName = rand(0000,99999).'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        $visa->image=$imageName;
        $visa->save();
        return redirect()->back();
    }

    public function citizenget(Request $request)
    {
        $check = Visa::where('title','citizen')->latest('id')->first();
        return view('services/citizenship',['check'=>$check]);
    }


    
    public function aboutus(Request $request)
    {
        
        $check = Visa::where('title','aboutus')->latest('id')->first();
        if($check)
        {
            $check->description = $request->description;
            $imageName = rand(0000,99999).'.'.$request->image->extension();  
    
            $request->image->move(public_path('images'), $imageName);
            $check->image=$imageName;
            $check->save();
            return redirect()->back();
        }
       
        $visa = new Visa;
        $visa->title = 'aboutus';
        $visa->description = $request->description;
        $imageName = rand(0000,99999).'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        $visa->image=$imageName;
        $visa->save();
        return redirect()->back();
    }

    public function aboutusget(Request $request)
    {
        $check = Visa::where('title','aboutus')->latest('id')->first();
        return view('about_us',['check'=>$check]);
    }

    public function slider(Request $request)
    {
        $check = Slider::latest('id')->first();
        if($check)
        {
            $imageName1 = 'Slider'.rand(0000,99999).'.'.$request->image1->extension();  
            $request->image1->move(public_path('images'), $imageName1);
            $check->image1=$imageName1;

            $imageName2 = 'Slider'.rand(0000,99999).'.'.$request->image2->extension();  
            $request->image2->move(public_path('images'), $imageName2);
            $check->image2=$imageName2;

            $imageName3 = 'Slider'.rand(0000,99999).'.'.$request->image3->extension();  
            $request->image3->move(public_path('images'), $imageName3);
            $check->image3=$imageName3;

            $check->save();
            return redirect()->back();
        }
        
        $slider = new Slider;
        
        $imageName1 = 'Slider'.rand(0000,99999).'.'.$request->image1->extension();  
        $request->image1->move(public_path('images'), $imageName1);
        $slider->image1=$imageName1;

        $imageName2 = 'Slider'.rand(0000,99999).'.'.$request->image2->extension();  
        $request->image2->move(public_path('images'), $imageName2);
        $slider->image2=$imageName2;

        $imageName3 = 'Slider'.rand(0000,99999).'.'.$request->image3->extension();  
        $request->image3->move(public_path('images'), $imageName3);
        $slider->image3=$imageName3;

        $slider->save();
        return redirect()->back();
        
    }
}