<?php
namespace App\Http\Controllers;

use App\Http\Requests\CreateAnnualLeaveRequest;
use App\Repositories\UserRepository;
use App\Repositories\AnnualLeaveRepository;
use Illuminate\Http\Request;


class AnnualLeaveController extends Controller
{

    protected $userRepository;
    protected $annualLeaveRepository;

    // cunstruct
    public function __construct(UserRepository $userRepository, AnnualLeaveRepository $annualLeaveRepository)
    {
        $this->userRepository = $userRepository;
        $this->annualLeaveRepository = $annualLeaveRepository;
    }

    /**
     * Create a new annual leave.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAnnualLeave(CreateAnnualLeaveRequest $request)
    {
        $input = $request->validated();
        var_dump($input);
        die;
        $user = $this->userRepository->getUserById($request->input('user_id'));
        $data = $request->only(['start_date', 'end_date', 'status', 'reason']);
        $data['user_id'] = $user->id;

        $annualLeave = $this->annualLeaveRepository->createAnnualLeave($data);

        return response()->json($annualLeave, 201);
    }

    /**
     * Get a specific annual leave.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAnnualLeave($id)
    {
        $annualLeave = $this->annualLeaveRepository->getAnnualLeaveById($id);

        return response()->json($annualLeave, 200);
    }

    /**
     * Get all annual leaves.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllAnnualLeaves()
    {
        $annualLeaves = $this->annualLeaveRepository->getAllAnnualLeaves();

        return response()->json($annualLeaves, 200);
    }
}
