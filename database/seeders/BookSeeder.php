<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = [
            ['name' => '[Schaum_s outline series] Mendelson, Elliott - Schaum_s outline of 3000 solved problems in calculus (2009, McGraw-Hill) - libgen.lc.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/x1ktlceu4weyy3t/%255BSchaum_s_outline_series%255D_Mendelson%252C_Elliott_-_Schaum_s_outline_of_3000_solved_problems_in_calculus_%25282009%252C_McGraw-Hill%2529_-_libgen.lc.pdf/file', 'is_url' => 1, 'sub_category_id' => 1],
            ['name' => 'Advanced Thermodynamics For Engineers.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/20im2rj5xzoavsd/Advanced_Thermodynamics_For_Engineers.pdf/file', 'is_url' => 1, 'sub_category_id' => 2],
            ['name' => 'Annamalai - Advanced Thermodynamics Engineering.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/ovlwruazclrflek/Annamalai_-_Advanced_Thermodynamics_Engineering.pdf/file', 'is_url' => 1, 'sub_category_id' => 2],
            ['name' => 'Chemical Thermodynamics for Metals and Materials.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/2ib5yrgw12saoon/Chemical_Thermodynamics_for_Metals_and_Materials.pdf/file', 'is_url' => 1, 'sub_category_id' => 2],
            ['name' => 'Thermodynamics  Fundamentals for Applications.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/h9f1b490yc4wnpa/Thermodynamics__Fundamentals_for_Applications.pdf/file', 'is_url' => 1, 'sub_category_id' => 2],
            ['name' => 'Thermodynamics and Kinetics in Materials Science - A Short Course.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/q4rfc4lxguw8ioi/Thermodynamics_and_Kinetics_in_Materials_Science_-_A_Short_Course.pdf/file', 'is_url' => 1, 'sub_category_id' => 2],
            ['name' => '-vogel_qualitative.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/gfi61t6mbz24doq/-vogel_qualitative.pdf/file', 'is_url' => 1, 'sub_category_id' => 3],
            ['name' => 'Vogel_s Textbook Of Macro And SemiMicro Qualitative Inorganic Analysis 5th ed - G.Svehla.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/7lj3v8r6mz8fbva/Vogel_s_Textbook_Of_Macro_And_SemiMicro_Qualitative_Inorganic_Analysis_5th_ed_-_G.Svehla.pdf/file', 'is_url' => 1, 'sub_category_id' => 3],
            ['name' => 'Calculus (9rd Edition) - Dale Varberg, Edwin Purcell and Steve Rigdon.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/lldqp2e18tarfis/Calculus_%25289rd_Edition%2529_-_Dale_Varberg%252C_Edwin_Purcell_and_Steve_Rigdon.pdf/file', 'is_url' => 1, 'sub_category_id' => 4],
            ['name' => 'CATATAN_KULIAH_ILMU_UKUR_TANAH.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/lawuusksxqw1t6i/CATATAN_KULIAH_ILMU_UKUR_TANAH.pdf/file', 'is_url' => 1, 'sub_category_id' => 5],
            ['name' => 'DK3237ch1.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/hwgnrwe6k5p9x3j/DK3237ch1.pdf/file', 'is_url' => 1, 'sub_category_id' => 6],
            ['name' => 'DK3237ch10.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/vlmawybw5h3849j/DK3237ch10.pdf/file', 'is_url' => 1, 'sub_category_id' => 6],
            ['name' => 'DK3237ch11.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/24tco9m3l3e3qlp/DK3237ch11.pdf/file', 'is_url' => 1, 'sub_category_id' => 6],
            ['name' => 'DK3237ch12.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/26icljcusf9be6k/DK3237ch12.pdf/file', 'is_url' => 1, 'sub_category_id' => 6],
            ['name' => 'DK3237ch2.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/ni6bv0wt9whifz3/DK3237ch2.pdf/file', 'is_url' => 1, 'sub_category_id' => 6],
            ['name' => 'DK3237ch3.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/uv89geqcrbrrjw0/DK3237ch3.pdf/file', 'is_url' => 1, 'sub_category_id' => 6],
            ['name' => 'DK3237ch4.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/ydrddl1xkqskbvx/DK3237ch4.pdf/file', 'is_url' => 1, 'sub_category_id' => 6],
            ['name' => 'DK3237ch5.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/oqqlf6kkm5r3nou/DK3237ch5.pdf/file', 'is_url' => 1, 'sub_category_id' => 6],
            ['name' => 'DK3237ch6.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/6q17zfbtrzyp0v4/DK3237ch6.pdf/file', 'is_url' => 1, 'sub_category_id' => 6],
            ['name' => 'DK3237ch7.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/q5cbpksqsdcag8n/DK3237ch7.pdf/file', 'is_url' => 1, 'sub_category_id' => 6],
            ['name' => 'DK3237ch8.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/0ndewkdoqjcyuwm/DK3237ch8.pdf/file', 'is_url' => 1, 'sub_category_id' => 6],
            ['name' => 'DK3237ch9.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/jlg7su7dyhaq976/DK3237ch9.pdf/file', 'is_url' => 1, 'sub_category_id' => 6],
            ['name' => 'dk3237fm.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/gtu72im0mvt68lq/dk3237fm.pdf/file', 'is_url' => 1, 'sub_category_id' => 6],
            ['name' => 'V. Ramachandran - Failure Analysis of Engineering Structures_ Methodology and Case Histories (2005).pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/lnw9wptwsf6c679/V._Ramachandran_-_Failure_Analysis_of_Engineering_Structures__Methodology_and_Case_Histories_%25282005%2529.pdf/file', 'is_url' => 1, 'sub_category_id' => 6],
            ['name' => '1.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/5konk787fyj3p4h/1.pdf/file', 'is_url' => 1, 'sub_category_id' => 7],
            ['name' => '2.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/ifak3ij1zrm782f/2.pdf/file', 'is_url' => 1, 'sub_category_id' => 7],
            ['name' => '3.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/6c1opf440m0q7mh/3.pdf/file', 'is_url' => 1, 'sub_category_id' => 7],
            ['name' => '4.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/9p7e6zjk88jgtws/4.pdf/file', 'is_url' => 1, 'sub_category_id' => 7],
            ['name' => '5.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/u0b45xjbglte0fr/5.pdf/file', 'is_url' => 1, 'sub_category_id' => 7],
            ['name' => 'appendix a.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/vkvf11tdrz4gw0p/appendix_a.pdf/file', 'is_url' => 1, 'sub_category_id' => 7],
            ['name' => 'appendix b.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/7ne5xhob54mji8g/appendix_b.pdf/file', 'is_url' => 1, 'sub_category_id' => 7],
            ['name' => 'appendix c.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/ut41d8m0h2ku9d4/appendix_c.pdf/file', 'is_url' => 1, 'sub_category_id' => 7],
            ['name' => 'appendix d.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/9kyj7z0xdj94gkt/appendix_d.pdf/file', 'is_url' => 1, 'sub_category_id' => 7],
            ['name' => 'contents.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/v8h2ujfo3pu3lip/contents.pdf/file', 'is_url' => 1, 'sub_category_id' => 7],
            ['name' => 'index.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/pufvky21kj4p4oh/index.pdf/file', 'is_url' => 1, 'sub_category_id' => 7],
            ['name' => 'preface.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/6srtp06u3xvga8a/preface.pdf/file', 'is_url' => 1, 'sub_category_id' => 7],
            ['name' => 'ENN-Vol 01.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/48gycomtui27e9u/ENN-Vol_01.pdf/file', 'is_url' => 1, 'sub_category_id' => 8],
            ['name' => 'ENN-Vol 02.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/fh6udb6ts593fvl/ENN-Vol_02.pdf/file', 'is_url' => 1, 'sub_category_id' => 8],
            ['name' => 'ENN-Vol 03.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/oer4hu9za7odlvb/ENN-Vol_03.pdf/file', 'is_url' => 1, 'sub_category_id' => 8],
            ['name' => 'ENN-Vol 04.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/izy0a3etelqdx4l/ENN-Vol_04.pdf/file', 'is_url' => 1, 'sub_category_id' => 8],
            ['name' => 'ENN-Vol 05.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/slvc37d83y6djn5/ENN-Vol_05.pdf/file', 'is_url' => 1, 'sub_category_id' => 8],
            ['name' => 'ENN-Vol 06.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/ng772ce5ggweybw/ENN-Vol_06.pdf/file', 'is_url' => 1, 'sub_category_id' => 8],
            ['name' => 'ENN-Vol 07.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/btob5hwztv2w40h/ENN-Vol_07.pdf/file', 'is_url' => 1, 'sub_category_id' => 8],
            ['name' => 'ENN-Vol 08.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/fgp6nfdt8a5eamf/ENN-Vol_08.pdf/file', 'is_url' => 1, 'sub_category_id' => 8],
            ['name' => 'ENN-Vol 09.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/34y9fooi2ndf1ug/ENN-Vol_09.pdf/file', 'is_url' => 1, 'sub_category_id' => 8],
            ['name' => 'ENN-Vol 10.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/djw7yyiexdpf136/ENN-Vol_10.pdf/file', 'is_url' => 1, 'sub_category_id' => 8],
            ['name' => 'Engineering Rock mechanics.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/kae2kugs4w0u23p/Engineering_Rock_mechanics.pdf/file', 'is_url' => 1, 'sub_category_id' => 9],
            ['name' => 'Engineering Rock mechanics2.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/edq1y7pmy6gsnkr/Engineering_Rock_mechanics2.pdf/file', 'is_url' => 1, 'sub_category_id' => 9],
            ['name' => '14387_01.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/gl72n9ytkhstxsu/14387_01.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '14387_02.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/b0vliiyy2om8161/14387_02.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '14387_03.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/c7hcpnw2zeny48k/14387_03.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '14387_04.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/9bms2gtuhll5ulj/14387_04.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '14387_05.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/fibcauat7svl118/14387_05.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '14387_06.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/md0fe2p1terk8rw/14387_06.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '14387_07.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/0z7xtlpg238lpvl/14387_07.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '14387_08.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/9j5q1y4dbrswpon/14387_08.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '14387_09.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/e57whjms5347wpi/14387_09.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '14387_10.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/5hsa7f0hta71mva/14387_10.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '14387_fm.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/qvf7ffakq1wokjp/14387_fm.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '14387_indx.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/clqw87tfy18bx5r/14387_indx.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '14387_pref.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/f8ccteq7f4t2t91/14387_pref.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '14387_toc.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/4ikhmzi1u22kj08/14387_toc.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => 'Stig O.Olofsson Applied explosives technology for construction and mining.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/4usei9ztg9plhyz/Stig_O.Olofsson_Applied_explosives_technology_for_construction_and_mining.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '4174x_01.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/f5i7cwvsvv4y9mf/4174x_01.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '4174x_02.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/ge3l2bfhtjz7dyf/4174x_02.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '4174x_03.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/hc8ecc6kece8hnm/4174x_03.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '4174x_04.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/b2bxwz9m001vyl3/4174x_04.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '4174x_fm.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/9ngi4ft7uk9ovx4/4174x_fm.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '4174x_fore.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/kjkqx468x2ilg3p/4174x_fore.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '4174x_f_t.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/7u7mgkuwnnwinn8/4174x_f_t.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '4174x_indx.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/cxv2l083he7o5iw/4174x_indx.pdf/file', 'is_url' => 1, 'sub_category_id' => 10],
            ['name' => '4174x_toc.pdf', 'date' => 2022, 'file' => 'https://www.mediafire.com/file/521zxdxa3xqms5w/4174x_toc.pdf/file', 'is_url' => 1, 'sub_category_id' => 10]
        ];

        Book::insert($buku);
    }
}
