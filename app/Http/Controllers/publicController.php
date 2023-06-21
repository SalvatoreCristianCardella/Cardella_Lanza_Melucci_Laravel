<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class publicController extends Controller
{
    public $students= [
        [
            'Img' => 'https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=399&q=80',
            'Name' => 'Federico',
            'Surname' => 'Melucci',
            'Age' => '26',
            'Language' => 'HTML',
            'City' => 'Roma',
            'id' => 1,
        ],
        [
            'Img' => 'https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80',
            'Name' => 'Salvatore',
            'Surname' => 'Cardella',
            'Age' => '22',
            'Language' => 'LARAVEL',
            'City' => 'Napoli',
            'id' => 2,
        ],
        [
            'Img' => 'https://images.unsplash.com/photo-1504593811423-6dd665756598?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80',
            'Name' => 'Benedetto',
            'Surname' => 'Lanza',
            'Age' => '28',
            'Language' => 'CSS', 'LARAVEL',
            'City' => 'Palermo',
            'id' => 3,
        ],
        [
            'Img' => 'https://images.unsplash.com/photo-1500048993953-d23a436266cf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=869&q=80',
            'Name' => 'Christian',
            'Surname' => 'Infurna',
            'Age' => '30',
            'Language' => 'PHP', 'HTML',
            'City' => 'Torino',
            'id' => 4,
        ],
        [
            'Img' => 'https://images.unsplash.com/photo-1599566150163-29194dcaad36?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80',
            'Name' => 'Antonio',
            'Surname' => 'Lattarulo',
            'Age' => '38',
            'Language' => 'JAVASCRIPT',
            'City' => 'Bari',
            'id' => 5,
        ],
        [
            'Img' => 'https://images.unsplash.com/photo-1503249023995-51b0f3778ccf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=360&q=80',
            'Name' => 'Luis',
            'Surname' => 'Rodriguez',
            'Age' => '23',
            'Language' => 'BOOTSTRAP',
            'City' => 'Roma',
            'id' => 6,
        ],
        [
            'Img' => 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=464&q=80',
            'Name' => 'Marco',
            'Surname' => 'Fioravanti',
            'Age' => '30',
            'Language' => 'MYSQL',
            'City' => 'Roma',
            'id' => 7,
        ],
        [
            'Img' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80',
            'Name' => 'Andrea',
            'Surname' => 'Palermo',
            'Age' => '27',
            'Language' => 'MYSQL',
            'City' => 'Roma',
            'id' => 8,
        ],
    ];


    public function student(){
        return view ('studenti', ['students' => $this-> students]);
    }

    public function studentByLanguage($language) {

       
        $studentByLanguage = [];
    
        foreach ($this->students as $student) {
            if(strtolower($student['Language']) == strtolower($language)) {
                array_push($studentByLanguage, $student);
            }
        }
    
        return view('filtered', ['students' => $studentByLanguage, 'Language' => $language]);
    }

    public function searchStudent(Request $request)
    {
        $searchKey = $request->query('chiavediricerca');
       $searchStudent=[];

       foreach ($this->students as $student) {
             if(Str::of(Str::lower($student['Surname']))->contains(Str::lower($searchKey))); {
             $searchStudent = $student;
             }
       }
       return view('search', ['students' => $searchStudent, 'searchKey' => $searchKey]);
    }

}


