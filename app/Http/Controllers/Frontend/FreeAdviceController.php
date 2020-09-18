<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Settings\Setting;
use App\Repositories\Frontend\Pages\PagesRepository;
use App\Models\Access\User\User;
use App\Models\Specialization;
use App\Models\Enquiry;
use App\Models\Free\FreeQuestion;
use Validator;
use Illuminate\Http\Request;
use App\Notifications\Frontend\Auth\ContactUsEmail;

/**
 * Class FrontendController.
 */
class FreeAdviceController extends Controller
{
    public function freeQuestionSave(Request $request)
    {
        $input = $request->except(['_token']);
        FreeQuestion::insert($input);
//        FreeQuestion::insert([
//            'area' => $request->input('area'),
//            'city' => $request->input('city'),
//            'subject' => $request->input('subject'),
//            'question' => $request->input('question'),
//            'name' => $request->input('name'),
//            'email' => $request->input('email'),
//            'number' => $request->input('number'),
//        ]);
        return redirect()->route('frontend.index');
    }

}
