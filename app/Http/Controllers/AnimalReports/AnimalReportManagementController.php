<?php

namespace App\Http\Controllers\AnimalReports;

use App\Constants\Messages\Success;
use App\Http\Controllers\Controller;
use App\Http\Resources\ReportAbandonedAnimalResource;
use App\Http\Response\Response;
use App\Models\ReportAbandonedAnimal;
use Illuminate\Http\Request;

class AnimalReportManagementController extends Controller
{

    public function index()
    {
        return Response::success(Success::OPERATION_SUCCESSFUL, ReportAbandonedAnimalResource::collection(ReportAbandonedAnimal::all()));
    }
}
