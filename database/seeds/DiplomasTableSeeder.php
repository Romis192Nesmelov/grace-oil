<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Diploma;

class DiplomasTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            ['preview' => 'images/diplomas/diploma1_preview.jpeg', 'full' => 'images/diplomas/diploma1_full.pdf', 'text_ru' => 'Одобрение MAN на GRACE Perfect FS Long 10W-40', 'text_en' => 'MAN approval for GRACE Perfect FS Long 10W-40'],
            ['preview' => 'images/diplomas/diploma2_preview.jpeg', 'full' => 'images/diplomas/diploma2_full.jpeg', 'text_ru' => 'Одобрения Volvo, Mack и Renault на GRACE Perfect FSJ 10W-30', 'text_en' => 'Volvo, Mack and Renault approvals for GRACE Perfect FSJ 10W-30'],
            ['preview' => 'images/diplomas/diploma3_preview.jpg', 'full' => 'images/diplomas/diploma3_full.jpeg', 'text_ru' => 'Одобрения Volvo, Mack и Renault на GRACE Perfect 10W-40', 'text_en' => 'Volvo, Mack and Renault approvals for GRACE Perfect 10W-40'],
            ['preview' => 'images/diplomas/diploma4_preview.jpg', 'full' => 'images/diplomas/diploma4_full.jpeg', 'text_ru' => 'Одобрения Volvo, Mack и Renault на GRACE Perfect C 15W-40', 'text_en' => 'Volvo, Mack and Renault approvals for GRACE Perfect C 15W-40'],

            ['preview' => 'images/diplomas/diploma5_preview.png', 'full' => 'images/diplomas/diploma5_full.png', 'text_ru' => 'Регистрация ACEA E6 на GRACE Perfect FLS 5W-30', 'text_en' => 'ACEA E6 registration on GRACE Perfect FLS 5W-30'],
            ['preview' => 'images/diplomas/diploma6_preview.png', 'full' => 'images/diplomas/diploma6_full.png', 'text_ru' => 'Одобрение ACEA E6 на GRACE Perfect FLS 10W-40', 'text_en' => 'ACEA E6 approval on GRACE Perfect FLS 10W-40'],
            ['preview' => 'images/diplomas/diploma7_preview.png', 'full' => 'images/diplomas/diploma7_full.png', 'text_ru' => 'Одобрение ACEA E7+A3/B4 на GRACE Perfect FS 10W-40', 'text_en' => 'ACEA E7+A3/B4 approval for GRACE Perfect FS 10W-40'],
            ['preview' => 'images/diplomas/diploma8_preview.png', 'full' => 'images/diplomas/diploma8_full.png', 'text_ru' => 'Одобрение ACEA E4 на GRACE Perfect FS Long 10W-40', 'text_en' => 'ACEA E4 approval on GRACE Perfect FS Long 10W-40'],

            ['preview' => 'images/diplomas/diploma9_preview.png', 'full' => 'images/diplomas/diploma9_full.png', 'text_ru' => 'Регистрация ACEA E7+A3/B4 на GRACE Perfect C 15W-40', 'text_en' => 'Registration of ACEA E7+A3/B4 on GRACE Perfect C 15W-40'],
            ['preview' => 'images/diplomas/diploma10_preview.png', 'full' => 'images/diplomas/diploma10_full.png', 'text_ru' => 'Регистрация ACEA A3/B4 на GRACE Absolute FS 5W-40', 'text_en' => 'ACEA A3/B4 registration for GRACE Absolute FS 5W-40'],
            ['preview' => 'images/diplomas/diploma11_preview.png', 'full' => 'images/diplomas/diploma11_full.png', 'text_ru' => 'Регистрация ACEA C3 на GRACE Absolute C3 5W-30', 'text_en' => 'ACEA C3 registration on GRACE Absolute C3 5W-30'],
            ['preview' => 'images/diplomas/diploma12_preview.png', 'full' => 'images/diplomas/diploma12_full.png', 'text_ru' => 'Регистрация ACEA A5/B5 на GRACE Absolute FFD 5W-30', 'text_en' => 'ACEA A5/B5 registration for GRACE Absolute FFD 5W-30'],

            ['preview' => 'images/diplomas/diploma13_preview.png', 'full' => 'images/diplomas/diploma13_full.png', 'text_ru' => 'Автокомпонент года 2018', 'text_en' => 'Autocomponent of the Year 2018'],
            ['preview' => 'images/diplomas/diploma14_preview.png', 'full' => 'images/diplomas/diploma14_full.png', 'text_ru' => 'Автокомпонент года 2017', 'text_en' => 'Autocomponent of the Year 2017'],
            ['preview' => 'images/diplomas/diploma15_preview.png', 'full' => 'images/diplomas/diploma15_full.png', 'text_ru' => 'Выставка Импортозамещение', 'text_en' => 'Exhibition Import substitution'],
            ['preview' => 'images/diplomas/diploma16_preview.png', 'full' => 'images/diplomas/diploma16_full.png', 'text_ru' => 'Выставка Импортозамещение', 'text_en' => 'Exhibition Import substitution']
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            Diploma::create($item);
        }
    }
}