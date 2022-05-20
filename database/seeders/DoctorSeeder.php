<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Doctor::create([
            'ssn'=>'8524001',
            'name'=>'Mohammad Adel',
            'speciality'=>'child and Adolescence Disorders',
            'rating'=>'4.7',
            'img' => 'people pic 2.jpg',
            'birth_date'=>'1985-02-04',
            'phone'=>'011111111',
            'password'=>Hash::make('198524MA'),
            'email'=>'mohammadadel85@gmail.com',
            'session_fees'=>'150',
            'experince_years'=>'4',
            'education'=>'Master\'s degree in autism',
            'gender'=>'male',
            ]);
         \App\Models\Doctor::create([
            'ssn'=>'8542002',
            'name'=>'Amira Ali',
            'speciality'=>'child and Adolescence Disorders',
            'rating'=>'4.7',
            'img' => 'people pic 8.jpg',
            'birth_date'=>'1981-04-02',
            'phone'=>'012222222',
            'password'=>Hash::make('198542AA'),
            'email'=>'amiraali85@gmail.com',
            'session_fees'=>'250',
            'experince_years'=>'7',
            'education'=>'PhD in communication sciences',
            'gender'=>'female',
            ]);
        \App\Models\Doctor::create([
            'ssn'=>'8265003',
            'name'=>'Samir Mohammad',
            'speciality'=>'General Psychiatry',
            'rating'=>'4.7',
            'img' => 'people pic 7.jpg',
            'birth_date'=>'1985-06-05',
            'phone'=>'013333333',
            'password'=>Hash::make('198265SM'),
            'email'=>'samirmohammad82@gmail.com',
            'session_fees'=>'200',
            'experince_years'=>'5',
            'education'=>'Master\'s degree in General Psychiatry',
            'gender'=>'male',
            ]);
        \App\Models\Doctor::create([
            'ssn'=>'8256004',
            'name'=>'Manar Ahmed',
            'speciality'=>'General Psychiatry',
            'rating'=>'4.7',
            'img' => 'people pic 8.jpg',
            'birth_date'=>'1985-05-06',
            'phone'=>'014444444',
            'password'=>Hash::make('198256MA'),
            'email'=>'manarahmed82@gmail.com',
            'session_fees'=>'150',
            'experince_years'=>'3',
            'education'=>'Master\'s degree in General Psychiatry',
            'gender'=>'female',
            ]);
        \App\Models\Doctor::create([
            'ssn'=>'8179005',
            'name'=>'Ahmed Abbas',
            'speciality'=>'Geriatric Psychiatry',
            'rating'=>'4.7',
            'img' => 'people pic 3.jpg',
            'birth_date'=>'1981-07-09',
            'phone'=>'015555555',
            'password'=>Hash::make('198179AA'),
            'email'=>'ahmedabbas81@gmail.com',
            'session_fees'=>'200',
            'experince_years'=>'7',
            'education'=>'Master\'s degree in Geriatric Psychiatry',
            'gender'=>'male',
            ]);
        \App\Models\Doctor::create([
            'ssn'=>'8197006',
            'name'=>'Salah Abd Alah',
            'speciality'=>'Geriatric Psychiatry',
            'rating'=>'4.7',
            'img' => 'people pic 4.jpg',
            'birth_date'=>'1981-09-07',
            'phone'=>'016666666',
            'password'=>Hash::make('198197SA'),
            'email'=>'salahabdalah81@gmail.com',
            'session_fees'=>'100',
            'experince_years'=>'4',
            'education'=>'PhD in Geriatric Psychiatry',
            'gender'=>'male',
            ]);
        \App\Models\Doctor::create([
            'ssn'=>'8354007',
            'name'=>'Walaa Mohammad',
            'speciality'=>'Marital and Family Relations',
            'rating'=>'4.7',
            'img' => 'people pic 8.jpg',
            'birth_date'=>'1983-05-04',
            'phone'=>'017777777',
            'password'=>Hash::make('198354WM'),
            'email'=>'walaamohammad83@gmail.com',
            'session_fees'=>'200',
            'experince_years'=>'6',
            'education'=>'Master\'s degree in Marital and Family Relations',
            'gender'=>'female',
            ]);

        \App\Models\Doctor::create([
            'ssn'=>'8345008',
            'name'=>'Amir Karim',
            'speciality'=>'Marital and Family Relations',
            'rating'=>'4.7',
            'img' => 'people pic 2.jpg',
            'birth_date'=>'1983-04-05',
            'phone'=>'018888888',
            'password'=>Hash::make('19845AK'),
            'email'=>'amirkarim83@gmail.com',
            'session_fees'=>'100',
            'experince_years'=>'4',
            'education'=>'PHD in Marital and Family Relations',
            'gender'=>'male',
            ]);
        \App\Models\Doctor::create([
            'ssn'=>'8775009',
            'name'=>'Marina Kamil',
            'speciality'=>'Forensic Psychiatry',
            'rating'=>'4.5',
            'img' => 'people pic 6.jpg',
            'birth_date'=>'1987-07-05',
            'phone'=>'019999999',
            'password'=>Hash::make('198775MK'),
            'email'=>'marinakamil87@gmail.com',
            'session_fees'=>'100',
            'experince_years'=>'4',
            'education'=>'Bachelor of Psychology',
            'gender'=>'female',
            ]);
        \App\Models\Doctor::create([
            'ssn'=>'87570010',
            'name'=>'Samar Said',
            'speciality'=>'Forensic Psychiatry',
            'rating'=>'4.6',
            'img' => 'people pic 8.jpg',
            'birth_date'=>'1987-05-07',
            'phone'=>'099999999',
            'password'=>Hash::make('198757SS'),
            'email'=>'samarsaid87@gmail.com',
            'session_fees'=>'200',
            'experince_years'=>'4',
            'education'=>'Master\'s degree in Psychology',
            'gender'=>'female',
            ]);
        \App\Models\Doctor::create([
            'ssn'=>'75890011',
            'name'=>'Nader Ali',
            'speciality'=>'Addiction',
            'rating'=>'4.3',
            'img' => 'people pic 4.jpg',
            'birth_date'=>'1975-08-09',
            'phone'=>'011333333',
            'password'=>Hash::make('197589NA'),
            'email'=>'naderali75@gmail.com',
            'session_fees'=>'250',
            'experince_years'=>'10',
            'education'=>'PhD in addiction',
            'gender'=>'male',
            ]);
        \App\Models\Doctor::create([
            'ssn'=>'75980012',
            'name'=>'Kamal Mohammad',
            'speciality'=>'Addiction',
            'rating'=>'4.7',
            'img' => 'people pic 7.jpg',
            'birth_date'=>'1979-09-08',
            'phone'=>'011444444',
            'password'=>Hash::make('197598KM'),
            'email'=>'kamalmohammad75@gmail.com',
            'session_fees'=>'250',
            'experince_years'=>'9',
            'education'=>'PhD in Psychology',
            'gender'=>'male',
            ]);
        \App\Models\Doctor::create([
            'ssn'=>'88811013',
            'name'=>'Ahmed Abd El Ghane',
            'speciality'=>'life coach',
            'rating'=>'4.7',
            'img' => 'people pic 4.jpg',
            'birth_date'=>'1988-08-18',
            'phone'=>'011555555',
            'password'=>Hash::make('1988811AA'),
            'email'=>'ahmedabdehghane88@gmail.com',
            'session_fees'=>'150',
            'experince_years'=>'4',
            'education'=>'Bachelor of Psychology',
            'gender'=>'male',
            ]);
        \App\Models\Doctor::create([
            'ssn'=>'88118014',
            'name'=>'Amin Ali',
            'speciality'=>'life coach',
            'rating'=>'4.4',
            'img' => 'people pic 7.jpg',
            'birth_date'=>'1981-01-28',
            'phone'=>'011666666',
            'password'=>Hash::make('1988118AA'),
            'email'=>'aminali88@gmail.com',
            'session_fees'=>'200',
            'experince_years'=>'6',
            'education'=>'Bachelor of Psychology',
            'gender'=>'male',
            ]);
        \App\Models\Doctor::create([
            'ssn'=>'91189015',
            'name'=>'Said Ali',
            'speciality'=>'Biological psychiatry',
            'rating'=>'3.9',
            'img' => 'people pic 3.jpg',
            'birth_date'=>'1991-01-01',
            'phone'=>'011777777',
            'password'=>Hash::make('1991189SA'),
            'email'=>'saidali91@gmail.com',
            'session_fees'=>'100',
            'experince_years'=>'4',
            'education'=>'Master\'s degree in Obsessive-compulsive disorder',
            'gender'=>'male',
            ]);
        \App\Models\Doctor::create([
            'ssn'=>'84189016',
            'name'=>'Moustafa Said',
            'speciality'=>'Biological psychiatry',
            'rating'=>'4.9',
            'img' => 'people pic 2.jpg',
            'birth_date'=>'1988-01-04',
            'phone'=>'011888888',
            'password'=>Hash::make('1984189MS'),
            'email'=>'moustafasaid84@gmail.com',
            'session_fees'=>'150',
            'experince_years'=>'6',
            'education'=>'Master\'s degree in schizophrenia',
            'gender'=>'male',
            ]);
    }
}
