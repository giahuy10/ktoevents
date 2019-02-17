<?php

namespace App\Http\Controllers;
use App\Exports\XemWebMoiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\XemWebMoi;
use Illuminate\Http\Request;

class XemWebMoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('events/xemwebmoi', ['items'=> XemWebMoi::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function download() 
    {
        return Excel::download(new XemWebMoiExport, 'xem-web-moi.xlsx');
    }
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new XemWebMoi;
        foreach ($request->all() as $key => $value) {
            $data->$key = $value;
        }
        $correctAnser = [
            "q1Correct" => 3,
            "q2Correct" => 3,
            "q3Correct" => 2,
            "q4Correct" => 4,
            "q5Correct" => 1
        ]; 
        $answerText = [
            "a1" => [
                "1" => "A. visitkorea.or.kr",
                "2" => "B. ktovietnam.org.vn",
                "3" => "C. visitkorea.org.vn",
                "4" => "D. ktovietnam.or.kr"
            ],
            "a2" => [
                "1" => "A. Mục Tin tức mới nhất thuộc mục Tin tức du lịch",
                "2" => "B. Mục Sản phẩm du lịch",
                "3" => "C. Mục Thông tin chung thuộc mục Về Hàn Quốc",
                "4" => "D. Mục Thông cáo báo chí thuộc Tin tức du lịch",
            ],
            "a3" => [
                "1" => "A. E-coupon giảm giá các dịch vụ tại Hàn Quốc",
                "2" => "B. Người dùng website có thể đăng bài trải nghiệm du lịch Hàn Quốc của chính mình",
                "3" => "C. E-book về du lịch Hàn Quốc",
                "4" => "",
            ],
            "a4" => [
                "1" => "A. Du lịch y tế; Du lịch Cao cấp",
                "2" => "B. Lễ hội, sự kiện; Du lịch MICE",
                "3" => "C. Du lịch bốn mùa xuân, hạ, thu đông",
                "4" => "D. Tất cả các phương án trên",
            ],
            "a5" => [
                "1" => "A. EXO",
                "2" => "B. BTS",
                "3" => "C. Black Pink",
                "4" => "D. TWICE",
            ]
        ];
        $data->is_correct = 1;
        for ($i=1; $i < 6; $i++) {
            $ai_text = "a".$i."_text";
            $is_ai_correct = "is_a".$i."_correct";
            $ai = "a".$i;
            $qiCorrect = "q".$i."Correct";
            // Check answer
            $data->$is_ai_correct = 0;
            if ($request->$ai == $correctAnser[$qiCorrect]) {
                $data->$is_ai_correct = 1;
            } else {
                $data->is_correct = 0;
            }
            // Get answer text
            $data->$ai_text = $answerText[$ai][$request->$ai];
        }
        // $data->test = "ok ok";
        // Format time
        $data->time_submit = time();
        $data->time_enter = strtotime($data->time_enter);
        $data->time_start = strtotime($data->time_start);
        $data->save();
        return response()->json($data, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\XemWebMoi  $xemWebMoi
     * @return \Illuminate\Http\Response
     */
    public function show(XemWebMoi $xemWebMoi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\XemWebMoi  $xemWebMoi
     * @return \Illuminate\Http\Response
     */
    public function edit(XemWebMoi $xemWebMoi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\XemWebMoi  $xemWebMoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, XemWebMoi $xemWebMoi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\XemWebMoi  $xemWebMoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(XemWebMoi $xemWebMoi)
    {
        //
    }
}
