<?php

namespace App\Http\Controllers\AnimalReports;

use App\Constants\Animal\AnimalStatus;
use App\Constants\Messages\{Errors, HttpErrors, Success};
use App\Constants\ReportAbandonedAnimal\ReportAbandonedAnimalStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnimalReportRequest;
use App\Http\Resources\ReportAbandonedAnimalResource;
use App\Http\Response\Response;
use App\Models\Animal;
use App\Models\ReportAbandonedAnimal;
use App\Models\ReportingUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimalReportController extends Controller
{
    public function reportAbandonedAnimal(AnimalReportRequest $request)
    {
        DB::beginTransaction();
        try {

            $reportingUser = ReportingUser::where('email', $request->reporting_user["email"])->first();

            if(!$reportingUser) {
                $reportingUser = ReportingUser::create([
                    'name' => $request->reporting_user["name"],
                    'surname' => $request->reporting_user["surname"],
                    'email' => $request->reporting_user["email"],
                    'phone' => $request->reporting_user["phone"]
                ]);
            }


            $reportAnimal = ReportAbandonedAnimal::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $request->image,
                'status' => ReportAbandonedAnimalStatus::CODE_INITIAL_REPORT,
                'abandonment_location' => $request->abandonment_location,
                'abandonment_status' => $request->abandonment_status,
                'abandonment_date' => $request->abandonment_date,
                'reporting_user_id' => $reportingUser->id,
            ]);

            foreach ($request->animals as $animals) {
                $animal = new Animal($animals);
                $animal->report_abandoned_animal_id = $reportAnimal->id;
                $animal->status = AnimalStatus::CODE_ABANDONED;
                $animal->save();
            }

            DB::commit();

            return Response::success(Success::ACTION_COMPLETED, new ReportAbandonedAnimalResource($reportAnimal), 201);

        } catch (\Exception $e) {
            DB::rollBack();
            return Response::error(Errors::SOMETHING_WENT_WRONG, [], HttpErrors::HTTP_500_INTERNAL_SERVER_ERROR, 500);
        }
    }
}
