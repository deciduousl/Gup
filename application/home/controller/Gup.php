<?php

namespace app\Home\Controller;

use think\Controller;
use \think\Request;
use think\Db;
class Gup extends Controller{

	public function get(){
		return $this->fetch();
	}
	public function index(){
		//想要爬取的证券代码
		$codde[] = 'SZ301108';
		$codde[] = 'SZ301019';
		$codde[] = 'SZ300937';
		$codde[] = 'SZ300925';
		$codde[] = 'SZ300916';
		$codde[] = 'SZ300863';
		$codde[] = 'SZ300561';
		$codde[] = 'SZ300465';
		$codde[] = 'SZ300386';
		$codde[] = 'SZ300166';
		$codde[] = 'SZ300087';
		$codde[] = 'SZ002900';
		$codde[] = 'SZ002548';
		$codde[] = 'SZ002234';
		$codde[] = 'SZ002061';
		$codde[] = 'SZ002053';
		$codde[] = 'SZ000886';
		$codde[] = 'SZ000753';
		$codde[] = 'SZ000628';
		$codde[] = 'SH603969';
		$codde[] = 'SH603811';
		$codde[] = 'SH600482';
		$codde[] = 'SH600602';
		$codde[] = 'SH600502';
		$codde[] = 'SH600425';
		$codde[] = 'SH600185';
		$codde[] = 'SH600133';
		$codde[] = 'SZ301122';
		$codde[] = 'SZ301101';
		$codde[] = 'SZ301061';
		$codde[] = 'SZ300905';
		$codde[] = 'SZ300902';
		$codde[] = 'SZ300494';
		$codde[] = 'SZ300300';
		$codde[] = 'SZ300276';
		$codde[] = 'SZ300053';
		$codde[] = 'SZ300043';
		$codde[] = 'SZ300031';
		$codde[] = 'SZ002878';
		$codde[] = 'SZ002707';
		$codde[] = 'SZ002400';
		$codde[] = 'SZ002354';
		$codde[] = 'SZ000993';
		$codde[] = 'SZ000926';
		$codde[] = 'SZ000722';
		$codde[] = 'SZ000711';
		$codde[] = 'SH688601';
		$codde[] = 'SH605108';
		$codde[] = 'SH603825';
		$codde[] = 'SH603222';
		$codde[] = 'SH603155';
		$codde[] = 'SH601929';
		$codde[] = 'SH600784';
		$codde[] = 'SH600397';
		$codde[] = 'SH600303';
		$codde[] = 'SH600138';
		$codde[] = 'SZ300986';
		$codde[] = 'SZ002947';
		$codde[] = 'SZ001206';
		$codde[] = 'SZ000779';
		$codde[] = 'SZ000635';
		$codde[] = 'SZ000159';
		$codde[] = 'SH688766';
		$codde[] = 'SH600604';
		$codde[] = 'SH600526';
		$codde[] = 'SH600251';

		$param = '';
		$data_array = array();
		for ($i=0; $i < count($codde); $i++) { 
			//基于雪球网站的股票基础信息爬虫
			$url = "https://stock.xueqiu.com/v5/stock/quote.json?symbol=".$codde[$i]."&extend=detail";
			// var_dump($url);
			$results = $this->https_request_chiwu($url,$param);
			$results = json_decode($results,true);
			//存入数据库
			// $data = array();
			// $data['amount'] = $results['data']['quote']['amount'];//成交额
			// $data['amplitude'] = $results['data']['quote']['amplitude'];//振幅
			// $data['chg'] = $results['data']['quote']['chg'];//涨跌额
			// $data['code'] = $results['data']['quote']['code'];//代码
			// $data['currency'] = $results['data']['quote']['currency'];//货币单位
			// $data['current'] = $results['data']['quote']['current'];//当前价格
			// $data['current_ext'] = $results['data']['quote']['current_ext'];//价格2
			// $data['dividend'] = $results['data']['quote']['dividend'];//股息(TTM)
			// $data['dividend_yield'] = $results['data']['quote']['dividend_yield'];//股息率(TTM)
			// $data['eps'] = $results['data']['quote']['eps'];//每股收益
			// $data['exchange'] = $results['data']['quote']['exchange'];//交易所？
			// $data['float_market_capital'] = $results['data']['quote']['float_market_capital'];//流通值
			// $data['float_shares'] = $results['data']['quote']['float_shares'];//流通股
			// $data['high'] = $results['data']['quote']['high'];//最高
			// $data['high52w'] = $results['data']['quote']['high52w'];//52周最高
			// $data['last_close'] = $results['data']['quote']['last_close'];//昨收
			// $data['limit_down'] = $results['data']['quote']['limit_down'];//跌停
			// $data['limit_up'] = $results['data']['quote']['limit_up'];//涨停
			// $data['low'] = $results['data']['quote']['low'];//最低
			// $data['low52w'] = $results['data']['quote']['low52w'];//52周最低
			// $data['market_capital'] = $results['data']['quote']['market_capital'];//总市值
			// $data['name'] = $results['data']['quote']['name'];//名称
			// $data['navps'] = $results['data']['quote']['navps'];//每股净资产
			// $data['open'] = $results['data']['quote']['open'];//今开
			// $data['pb'] = $results['data']['quote']['pb'];//市净率
			// $data['pe_ttm'] = $results['data']['quote']['pe_ttm'];//市盈率(TTM)
			// $data['percent'] = $results['data']['quote']['percent'];//涨跌幅
			// $data['time'] = $results['data']['quote']['time'];//当前时间
			// $data['total_shares'] = $results['data']['quote']['total_shares'];//总股本
			// $data['turnover_rate'] = $results['data']['quote']['turnover_rate'];//换手
			// $data['volume_ratio'] = $results['data']['quote']['volume_ratio'];//量比
			// $data['symbol'] = $results['data']['quote']['symbol'];//详细代码
			// $data['status'] = $results['data']['market']['status'];//当日获取数据时状态：交易中,休市中,已收盘。
			// Db::table('ms_gup')->insert($data);
			//存入二维数组 用于导出表格
			
			$data_array[$i]=[];
			$data_array[$i]['symbol'] = $results['data']['quote']['symbol'];//详细代码
			$data_array[$i]['name'] = $results['data']['quote']['name'];//名称
			$data_array[$i]['time'] = $results['data']['quote']['time'];//获取数据时间
			
			$data_array[$i]['current'] = $results['data']['quote']['current'];//当前价格
			$data_array[$i]['chg'] = $results['data']['quote']['chg'];//涨跌额
			$data_array[$i]['percent'] = $results['data']['quote']['percent'];//涨跌幅
			$data_array[$i]['amplitude'] = $results['data']['quote']['amplitude'];//振幅
			$data_array[$i]['volume_ratio'] = $results['data']['quote']['volume_ratio'];//量比
			$data_array[$i]['amount'] = $results['data']['quote']['amount'];//成交额
			$data_array[$i]['open'] = $results['data']['quote']['open'];//今开
			$data_array[$i]['high'] = $results['data']['quote']['high'];//最高
			$data_array[$i]['low'] = $results['data']['quote']['low'];//最低
			$data_array[$i]['high52w'] = $results['data']['quote']['high52w'];//52周最高
			$data_array[$i]['low52w'] = $results['data']['quote']['low52w'];//52周最低
			$data_array[$i]['limit_up'] = $results['data']['quote']['limit_up'];//涨停
			$data_array[$i]['limit_down'] = $results['data']['quote']['limit_down'];//跌停
			$data_array[$i]['last_close'] = $results['data']['quote']['last_close'];//昨收
			$data_array[$i]['turnover_rate'] = $results['data']['quote']['turnover_rate'];//换手
			$data_array[$i]['code'] = $results['data']['quote']['code'];//代码
			$data_array[$i]['currency'] = $results['data']['quote']['currency'];//货币单位
			$data_array[$i]['current_ext'] = $results['data']['quote']['current_ext'];//价格2
			$data_array[$i]['dividend'] = $results['data']['quote']['dividend'];//股息(TTM)
			$data_array[$i]['dividend_yield'] = $results['data']['quote']['dividend_yield'];//股息率(TTM)
			$data_array[$i]['eps'] = $results['data']['quote']['eps'];//每股收益
			$data_array[$i]['exchange'] = $results['data']['quote']['exchange'];//交易所？
			$data_array[$i]['float_market_capital'] = $results['data']['quote']['float_market_capital'];//流通值
			$data_array[$i]['float_shares'] = $results['data']['quote']['float_shares'];//流通股
			$data_array[$i]['market_capital'] = $results['data']['quote']['market_capital'];//总市值
			$data_array[$i]['navps'] = $results['data']['quote']['navps'];//每股净资产
			$data_array[$i]['pb'] = $results['data']['quote']['pb'];//市净率
			$data_array[$i]['pe_ttm'] = $results['data']['quote']['pe_ttm'];//市盈率(TTM)
			$data_array[$i]['total_shares'] = $results['data']['quote']['total_shares'];//总股本
			$data_array[$i]['status'] = $results['data']['market']['status'];//当日获取数据时状态：交易中,休市中,已收盘。
		}
		// var_dump($data_array);
		
		vendor('PHPExcel.PHPExcel.Reader.Excel2007');
        vendor('PHPExcel.PHPExcel.Reader.Excel5');

        $objPHPExcel = new \PHPExcel();
        //4.激活当前的sheet表
        $objPHPExcel->setActiveSheetIndex(0);
        //5.设置表格头（即excel表格的第一行）
        $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', '详细代码')
                ->setCellValue('B1', '名称')
                ->setCellValue('C1', '获取数据时间')
                ->setCellValue('D1', '当前价格')
                ->setCellValue('E1', '涨跌额')
                ->setCellValue('F1', '涨跌幅')
                ->setCellValue('G1', '振幅')
                ->setCellValue('H1', '量比')
                ->setCellValue('I1', '成交额')
                ->setCellValue('J1', '今开')
                ->setCellValue('K1', '最高')
                ->setCellValue('L1', '最低')
                ->setCellValue('M1', '52周最高')
                ->setCellValue('N1', '52周最低')
                ->setCellValue('O1', '涨停')
                ->setCellValue('P1', '跌停')
                ->setCellValue('Q1', '昨收')
                ->setCellValue('R1', '换手')
                ->setCellValue('S1', '代码')
                ->setCellValue('T1', '货币单位')
                ->setCellValue('U1', '价格2')
                ->setCellValue('V1', '股息(TTM)')
                ->setCellValue('W1', '股息率(TTM)')
                ->setCellValue('X1', '每股收益')
                ->setCellValue('Y1', '交易所？')
                ->setCellValue('Z1', '流通值')
                ->setCellValue('AA1', '流通股')
                ->setCellValue('AB1', '总市值')
                ->setCellValue('AC1', '每股净资产')
                ->setCellValue('AD1', '市净率')
                ->setCellValue('AE1', '市盈率(TTM)')
                ->setCellValue('AF1', '总股本')
                ->setCellValue('AG1', '当日获取数据时状态');
        //设置A列水平居中
        $objPHPExcel->setActiveSheetIndex(0)->getStyle('A')->getAlignment()
                    ->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        //设置单元格宽度
        $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('A')->setWidth(10);
        $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('B')->setWidth(10); 
        $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('C')->setWidth(20); 
        $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('Z')->setWidth(12);
        $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('AA')->setWidth(12);
        $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('AB')->setWidth(12);
        $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('AF')->setWidth(20);
        //6.循环刚取出来的数组，将数据逐一添加到excel表格。
        for($i=0;$i<count($data_array);$i++){
           $objPHPExcel->getActiveSheet()->setCellValue('A'.($i+2),$data_array[$i]['symbol']);//详细代码
           $objPHPExcel->getActiveSheet()->setCellValue('B'.($i+2),$data_array[$i]['name']);//名称
           $objPHPExcel->getActiveSheet()->setCellValue('C'.($i+2),date("Y-m-d-H-i-s",microtime($data_array[$i]['time'])));//获取数据时间

           $objPHPExcel->getActiveSheet()->setCellValue('D'.($i+2),$data_array[$i]['current']);//当前价格
           $objPHPExcel->getActiveSheet()->setCellValue('E'.($i+2),$data_array[$i]['chg']);//涨跌额
           $objPHPExcel->getActiveSheet()->setCellValue('F'.($i+2),$data_array[$i]['percent']);//涨跌幅
           $objPHPExcel->getActiveSheet()->setCellValue('G'.($i+2),$data_array[$i]['amplitude']."%");//振幅
           $objPHPExcel->getActiveSheet()->setCellValue('H'.($i+2),$data_array[$i]['volume_ratio']);//量比
           $objPHPExcel->getActiveSheet()->setCellValue('I'.($i+2),$data_array[$i]['amount']);//成交额
           $objPHPExcel->getActiveSheet()->setCellValue('J'.($i+2),$data_array[$i]['open']);//今开
           $objPHPExcel->getActiveSheet()->setCellValue('K'.($i+2),$data_array[$i]['high']);//最高
           $objPHPExcel->getActiveSheet()->setCellValue('L'.($i+2),$data_array[$i]['low']);//最低
           $objPHPExcel->getActiveSheet()->setCellValue('M'.($i+2),$data_array[$i]['high52w']);//52周最高
           $objPHPExcel->getActiveSheet()->setCellValue('N'.($i+2),$data_array[$i]['low52w']);//52周最低
           $objPHPExcel->getActiveSheet()->setCellValue('O'.($i+2),$data_array[$i]['limit_up']);//涨停
           $objPHPExcel->getActiveSheet()->setCellValue('P'.($i+2),$data_array[$i]['limit_down']);//跌停
           $objPHPExcel->getActiveSheet()->setCellValue('Q'.($i+2),$data_array[$i]['last_close']);//昨收
           $objPHPExcel->getActiveSheet()->setCellValue('R'.($i+2),$data_array[$i]['turnover_rate']."%");//换手
           $objPHPExcel->getActiveSheet()->setCellValue('S'.($i+2),$data_array[$i]['code']);//代码
           $objPHPExcel->getActiveSheet()->setCellValue('T'.($i+2),$data_array[$i]['currency']);//货币单位
           $objPHPExcel->getActiveSheet()->setCellValue('U'.($i+2),$data_array[$i]['current_ext']);//价格2
           $objPHPExcel->getActiveSheet()->setCellValue('V'.($i+2),$data_array[$i]['dividend']);//股息(TTM)
           $objPHPExcel->getActiveSheet()->setCellValue('W'.($i+2),$data_array[$i]['dividend_yield']."%");//股息率(TTM)
           $objPHPExcel->getActiveSheet()->setCellValue('X'.($i+2),$data_array[$i]['eps']);//每股收益
           $objPHPExcel->getActiveSheet()->setCellValue('Y'.($i+2),$data_array[$i]['exchange']);//交易所？
           $objPHPExcel->getActiveSheet()->setCellValue('Z'.($i+2),$data_array[$i]['float_market_capital']);//流通值
           $objPHPExcel->getActiveSheet()->setCellValue('AA'.($i+2),$data_array[$i]['float_shares']);//流通股
           $objPHPExcel->getActiveSheet()->setCellValue('AB'.($i+2),$data_array[$i]['market_capital']);//总市值
           $objPHPExcel->getActiveSheet()->setCellValue('AC'.($i+2),$data_array[$i]['navps']);//每股净资产
           $objPHPExcel->getActiveSheet()->setCellValue('AD'.($i+2),$data_array[$i]['pb']);//市净率
           $objPHPExcel->getActiveSheet()->setCellValue('AE'.($i+2),$data_array[$i]['pe_ttm']);//市盈率(TTM)
           $objPHPExcel->getActiveSheet()->setCellValue('AF'.($i+2),$data_array[$i]['total_shares']);//总股本
           $objPHPExcel->getActiveSheet()->setCellValue('AG'.($i+2),$data_array[$i]['status']);//总股本
        }
        ob_end_clean();
        //7.设置保存的Excel表格名称
        $filename = date("Y-m-d-H-i-s",time()).'.xls';
        //8.设置当前激活的sheet表格名称；
        $objPHPExcel->getActiveSheet()->setTitle(date("Y-m-d",time()));
        //9.设置浏览器窗口下载表格
        header("Content-Type: application/force-download");  
        header("Content-Type: application/octet-stream");  
        header("Content-Type: application/download");  
        header('Content-Disposition:inline;filename="'.$filename.'"'); 
        header("Content-type:application/vnd.ms-excel;charset=UTF-8"); 
        //生成excel文件
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        //下载文件在浏览器窗口
        // $objWriter->save('php://output');
        //
        $_fileName = iconv("utf-8", "gb2312", $filename);   //转码  

	    // $objWriter->move(ROOT_PATH . 'public\static' . DS . 'uploads');
	    $objWriter->save(ROOT_PATH . 'public/static'.DS.'gup'.DS.$filename);
        exit;

		
	}
	public function test(){
		$a = '1649748869120';
		var_dump(date("Y-m-d-H-i-s",microtime($a)));

	}
	/**

 * 模拟post进行url请求

 * @param string $url

 * @param string $param

 */

 function request_post($url = '', $param = '') {

 if (empty($url) || empty($param)) {

  return false;

 }

 $postUrl = $url;

 $curlPost = $param;

 $ch = curl_init();//初始化curl

 curl_setopt($ch, CURLOPT_URL,$postUrl);//抓取指定网页

 curl_setopt($ch, CURLOPT_HEADER, 0);//设置header

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上

 curl_setopt($ch, CURLOPT_POST, 1);//post提交方式

 curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);

 $data = curl_exec($ch);//运行curl

 curl_close($ch);

 return $data;

 }
	/**
	 * 模拟 http 请求
	 * @param  String $url  请求网址
	 * @param  Array  $data 数据
	 */
	function https_request_chiwu($url, $data = null){
	    // curl 初始化
	    $curl = curl_init();
	    $header = array();
		$header[] = 'cookie: device_id=4d0f719c65f3f8018382725a521503cb; s=di17ef09vw; remember=1; xq_is_login=1; u=1841464012; bid=aa374004b5d3042feb368544a58fb00c_l28g6daw; xq_a_token=b8f27af98eae8105a9e47786000799b4f615444f; xqat=b8f27af98eae8105a9e47786000799b4f615444f; xq_r_token=4b3d4eca09beba8116e8c93884b836ada415318b; xq_id_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJ1aWQiOjE4NDE0NjQwMTIsImlzcyI6InVjIiwiZXhwIjoxNjU0NDExODcwLCJjdG0iOjE2NTE4MTk4NzA0ODEsImNpZCI6ImQ5ZDBuNEFadXAifQ.UxA2eLwAjg47p7bVuQDvd4SKH-_PawlUTbdR4xz7Ku0OtML497FvjUPDGqGuhLEOzq_TRjvJYxRJpnEsxD6KDlnZWn9PtY-4liMtDSZJrq261eQwkBz8j_Xpz4lWMY75QX4t6YbMehgL2PgqejsSAg0KpfAC9KSGLBXwPihh1MblRklHFQRQxsjs6jhE21q7bMApio_pc6M8M9Sx2dONR5u1hlJOXPYr_59br45o_pHxq-0ja-XYHkgnKOWFEMpj9dxIJTGHruQCzsCQ9Yzp-jpsQkrdr4Ym5g0_Ymql7fP3NFk6Ua3YLzMwOiSFGF6acyEF6AJSaHtZWEkQAHU-Ig; Hm_lvt_1db88642e346389874251b5a1eded6e3=1651801734,1652073264,1652769673,1652865133; is_overseas=0; Hm_lpvt_1db88642e346389874251b5a1eded6e3=1652925102';
		$header[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36';
		$header[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
	    // curl 设置
	    curl_setopt($curl, CURLOPT_URL, $url);
	    curl_setopt($curl, CURLOPT_HTTPHEADER,$header);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);

	    // 判断 $data get  or post
	    if ( !empty($data) ) {
	        curl_setopt($curl, CURLOPT_POST, 1);
	        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	    }

	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	    // 执行
	    $res = curl_exec($curl);
	    curl_close($curl);
	    return $res;
	}
}
