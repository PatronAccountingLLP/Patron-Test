<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

/**
 * Our own record of every website enquiry - see LeadCaptureController.
 *
 * The list this renders is the point of the whole exercise: the "Not in CRM"
 * filter is the set of enquiries Zoho did not accept, which nobody could see
 * before because the enquiry only ever existed inside Zoho.
 */
class LeadController extends Controller
{
    public function index(Request $request)
    {
        // An environment whose migrations have not run has no `leads` table. Say
        // so plainly - a 500 here would look exactly like "no enquiries yet", and
        // that ambiguity is what this whole feature exists to remove.
        if (!Schema::hasTable('leads')) {
            return view('admin.leads.missing');
        }

        $filter = $request->query('filter');

        $leads = Lead::query()
            ->when($filter === 'not_in_crm', fn ($q) => $q->notInCrm())
            ->when($filter === 'uncontactable', fn ($q) => $q->uncontactable())
            ->when($filter === 'unread', fn ($q) => $q->where('is_read', false))
            ->orderByDesc('created_at')
            ->paginate(30)
            ->withQueryString();

        return view('admin.leads.index', [
            'leads'             => $leads,
            'filter'            => $filter,
            'unreadCount'       => Lead::where('is_read', false)->count(),
            'notInCrmCount'     => Lead::notInCrm()->count(),
            'uncontactableCount'=> Lead::uncontactable()->count(),
        ]);
    }

    public function show(Lead $lead)
    {
        if (!$lead->is_read) {
            $lead->update(['is_read' => true]);
        }

        return view('admin.leads.show', compact('lead'));
    }

    public function markAsRead(Lead $lead)
    {
        $lead->update(['is_read' => true]);

        return back()->with('success', 'Lead marked as read.');
    }

    public function markAsUnread(Lead $lead)
    {
        $lead->update(['is_read' => false]);

        return back()->with('success', 'Lead marked as unread.');
    }
}
