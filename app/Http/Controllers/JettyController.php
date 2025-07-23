<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\Shape;
use App\Enums\Crane;
use App\Services\JettyService;
use App\Exceptions\CustomException;
use Illuminate\Validation\Rule;

class JettyController extends Controller
{
    protected $jettyService;

    public function __construct(JettyService $jettyService)
    {
        $this->jettyService = $jettyService;
    }

    public function index()
    {
        $shapes = Shape::cases();
        $cranes = Crane::cases();

        return view('jetty', [
            'shapes' => $shapes,
            'cranes' => $cranes,
        ]);
    }

    public function store(Request $request)
    {
        // Validate the input with enum validation
        $validated = $request->validate([
            'berat' => 'required|numeric|min:0|max:9999.99',
            'bentuk' => ['required', Rule::enum(Shape::class)],
            'crane' => ['required', Rule::enum(Crane::class)],
        ]);

        $data = null;
        $alert = null;

        try {
            $data = $this->jettyService->process(
                $validated['berat'],
                Shape::from($validated['bentuk']),
                Crane::from($validated['crane'])
            );
        } catch (CustomException $e) {
            $alert = $e->getMessage();
        } catch (\Exception $e) {
            $alert = 'Terjadi kesalahan. Silahkan coba lagi.';
        }

        if ($alert) {
            return redirect()->route('jetty')->withInput()->with('alert', $alert);
        }

        return redirect()->route('jetty')->with([
            'data' => $data,
            'withData' => true,
        ]);
    }
}
