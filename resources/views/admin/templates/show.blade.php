@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-[#0f172a] py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <a href="{{ route('admin.templates.index') }}" class="inline-flex items-center text-gray-600 dark:text-[#cbd5e1] hover:text-gray-900 dark:hover:text-white mb-4">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Back to Admin Panel
                    </a>
                    <h1 class="text-4xl font-black text-gray-900 dark:text-white mb-2">Review Template</h1>
                    <p class="text-lg text-gray-600 dark:text-[#cbd5e1]">Template #{{ $template->id }}</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Sidebar - Template Info -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Template Details -->
                <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl p-6 border border-gray-100 dark:border-[#334155]">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Template Details</h2>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-600 dark:text-[#cbd5e1] mb-1">Recipient Name</label>
                            <p class="text-lg text-gray-900 dark:text-white">{{ $template->recipient_name }}</p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-600 dark:text-[#cbd5e1] mb-1">PIN</label>
                            <p class="text-lg font-mono text-gray-900 dark:text-white">{{ $template->pin }}</p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-600 dark:text-[#cbd5e1] mb-1">Template Type</label>
                            <p class="text-lg text-gray-900 dark:text-white">{{ $template->template }}</p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-600 dark:text-[#cbd5e1] mb-1">Submitted By</label>
                            <p class="text-lg text-gray-900 dark:text-white">{{ $template->user->name ?? 'N/A' }}</p>
                            <p class="text-sm text-gray-500 dark:text-[#64748b]">{{ $template->user->email ?? 'N/A' }}</p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-600 dark:text-[#cbd5e1] mb-1">Submitted At</label>
                            <p class="text-lg text-gray-900 dark:text-white">{{ $template->created_at->format('M d, Y H:i') }}</p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-600 dark:text-[#cbd5e1] mb-1">Status</label>
                            <span class="inline-block px-3 py-1 rounded-full text-sm font-semibold bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400">
                                {{ ucfirst($template->status) }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl p-6 border border-gray-100 dark:border-[#334155]">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Actions</h2>
                    
                    <div class="space-y-3">
                        <button onclick="approveTemplate({{ $template->id }})" class="w-full bg-green-500 text-white px-6 py-3 rounded-xl font-semibold hover:bg-green-600 transition-colors">
                            Approve & Publish
                        </button>
                        <button onclick="rejectTemplate({{ $template->id }})" class="w-full bg-red-500 text-white px-6 py-3 rounded-xl font-semibold hover:bg-red-600 transition-colors">
                            Reject
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right Side - Template Preview -->
            <div class="lg:col-span-2">
                <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl p-6 border border-gray-100 dark:border-[#334155]">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Template Content</h2>
                    
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-600 dark:text-[#cbd5e1] mb-2">Heading</label>
                            <p class="text-xl text-gray-900 dark:text-white">{{ $template->heading ?? 'N/A' }}</p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-600 dark:text-[#cbd5e1] mb-2">Subheading</label>
                            <p class="text-lg text-gray-900 dark:text-white">{{ $template->subheading ?? 'N/A' }}</p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-600 dark:text-[#cbd5e1] mb-2">Message</label>
                            <p class="text-gray-900 dark:text-white whitespace-pre-wrap">{{ $template->message ?? 'N/A' }}</p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-600 dark:text-[#cbd5e1] mb-2">From</label>
                            <p class="text-lg text-gray-900 dark:text-white">{{ $template->from ?? 'N/A' }}</p>
                        </div>
                        
                        @if($template->images && count($template->images) > 0)
                        <div>
                            <label class="block text-sm font-semibold text-gray-600 dark:text-[#cbd5e1] mb-2">Images</label>
                            <div class="grid grid-cols-2 gap-4">
                                @if(isset($template->images['hero']))
                                <div>
                                    <p class="text-sm text-gray-600 dark:text-[#cbd5e1] mb-1">Hero Image</p>
                                    <img src="{{ $template->images['hero'] }}" alt="Hero" class="w-full h-32 object-cover rounded-lg">
                                </div>
                                @endif
                                @if(isset($template->images['section2']))
                                <div>
                                    <p class="text-sm text-gray-600 dark:text-[#cbd5e1] mb-1">Section 2 Image</p>
                                    <img src="{{ $template->images['section2'] }}" alt="Section 2" class="w-full h-32 object-cover rounded-lg">
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
async function approveTemplate(id) {
    const result = await Swal.fire({
        title: 'Approve Template?',
        text: 'This will publish the template and generate a slug. Continue?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#10b981',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Yes, Approve',
        cancelButtonText: 'Cancel'
    });

    if (result.isConfirmed) {
        try {
            const response = await fetch(`/admin/templates/${id}/approve`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                credentials: 'same-origin'
            });

            const data = await response.json();

            if (data.success) {
                await Swal.fire({
                    icon: 'success',
                    title: 'Template Approved!',
                    html: `
                        <p class="mb-2">Template has been published successfully!</p>
                        <div class="bg-gray-100 dark:bg-gray-800 p-3 rounded-lg mt-3">
                            <p class="text-sm font-semibold mb-1">URL:</p>
                            <p class="text-blue-600 dark:text-blue-400 break-all font-mono text-sm">${window.location.origin}/${data.slug}</p>
                        </div>
                    `,
                    confirmButtonColor: '#10b981',
                    confirmButtonText: 'OK'
                });
                window.location.href = '{{ route("admin.templates.index") }}';
            } else {
                throw new Error(data.message || 'Failed to approve template');
            }
        } catch (error) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: error.message || 'Failed to approve template',
                confirmButtonColor: '#ef4444'
            });
        }
    }
}

async function rejectTemplate(id) {
    const result = await Swal.fire({
        title: 'Reject Template?',
        text: 'This will archive the template. Continue?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ef4444',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Yes, Reject',
        cancelButtonText: 'Cancel'
    });

    if (result.isConfirmed) {
        try {
            const response = await fetch(`/admin/templates/${id}/reject`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                credentials: 'same-origin'
            });

            const data = await response.json();

            if (data.success) {
                await Swal.fire({
                    icon: 'success',
                    title: 'Template Rejected',
                    text: 'Template has been archived.',
                    confirmButtonColor: '#ef4444',
                    confirmButtonText: 'OK'
                });
                window.location.href = '{{ route("admin.templates.index") }}';
            } else {
                throw new Error(data.message || 'Failed to reject template');
            }
        } catch (error) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: error.message || 'Failed to reject template',
                confirmButtonColor: '#ef4444'
            });
        }
    }
}
</script>
@endsection
