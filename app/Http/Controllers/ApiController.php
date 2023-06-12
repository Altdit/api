<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;

class ApiController extends Controller {
    public function best(Request $request): JsonResponse {
        return response()->json(['best' => true]);
    }

    public function namesById(Request $request): JsonResponse {
        return response()->json(['namesById' => true]);
    }

    public function articleComments(Request $request): JsonResponse {
        return response()->json(['articleComments' => true]);
    }

    public function controversial(Request $request): JsonResponse {
        return response()->json(['controversial' => true]);
    }

    public function duplicateArticles(Request $request): JsonResponse {
        return response()->json(['duplicateArticles' => true]);
    }

    public function hot(Request $request): JsonResponse {
        return response()->json(['hot' => true]);
    }

    public function new(Request $request): JsonResponse {
        return response()->json(['new' => true]);
    }

    public function random(Request $request): JsonResponse {
        return response()->json(['random' => true]);
    }

    public function rising(Request $request): JsonResponse {
        return response()->json(['rising' => true]);
    }

    public function search(Request $request): JsonResponse {
        return response()->json(['search' => true]);
    }

    public function sidebar(Request $request): JsonResponse {
        return response()->json(['sidebar' => true]);
    }

    public function sort(Request $request): JsonResponse {
        return response()->json(['sort' => true]);
    }

    public function sticky(Request $request): JsonResponse {
        return response()->json(['sticky' => true]);
    }

    public function stylesheet(Request $request): JsonResponse {
        return response()->json(['stylesheet' => true]);
    }

    public function top(Request $request): JsonResponse {
        return response()->json(['top' => true]);
    }
}
