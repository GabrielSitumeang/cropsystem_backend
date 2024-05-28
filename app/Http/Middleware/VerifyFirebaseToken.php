<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;
use Kreait\Firebase\Exception\Auth\InvalidToken;

class VerifyFirebaseToken
{
    protected $auth;

    public function __construct(FirebaseAuth $auth)
    {
        $this->auth = $auth;
    }

    public function handle(Request $request, Closure $next)
    {
        $idToken = $request->bearerToken();

        if (!$idToken) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        try {
            $verifiedIdToken = $this->auth->verifyIdToken($idToken);
            $firebaseUserId = $verifiedIdToken->getClaim('sub');
            $request->attributes->set('firebase_user_id', $firebaseUserId);
        } catch (InvalidToken $e) {
            return response()->json(['error' => 'Unauthorized - Invalid Token'], 401);
        } catch (\Throwable $e) {
            return response()->json(['error' => 'Unauthorized - Invalid Token'], 401);
        }

        return $next($request);
    }
}
