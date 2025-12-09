@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-[#0f172a] py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-4xl font-black text-gray-900 dark:text-white mb-2">Admin Panel</h1>
                    <p class="text-lg text-gray-600 dark:text-[#cbd5e1]">Review and approve draft templates</p>
                </div>
                <a href="/" class="bg-gray-200 dark:bg-[#334155] text-gray-900 dark:text-white px-6 py-3 rounded-xl font-semibold hover:bg-gray-300 dark:hover:bg-[#475569] transition-colors">
                    Back to Home
                </a>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl p-6 border border-gray-100 dark:border-[#334155]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 dark:text-[#cbd5e1] mb-1">Pending Reviews</p>
                        <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $templates->count() }}</p>
                    </div>
                    <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-900/30 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Templates List -->
        @if($templates->count() > 0)
        <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl border border-gray-100 dark:border-[#334155] overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 dark:bg-[#0f172a] border-b border-gray-200 dark:border-[#334155]">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-[#cbd5e1] uppercase tracking-wider">ID</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-[#cbd5e1] uppercase tracking-wider">Recipient</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-[#cbd5e1] uppercase tracking-wider">User</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-[#cbd5e1] uppercase tracking-wider">Template</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-[#cbd5e1] uppercase tracking-wider">Submitted</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-[#cbd5e1] uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-[#334155]">
                        @foreach($templates as $template)
                        <tr class="hover:bg-gray-50 dark:hover:bg-[#0f172a] transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">#{{ $template->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">{{ $template->recipient_name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-[#cbd5e1]">{{ $template->user->name ?? 'N/A' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-[#cbd5e1]">{{ $template->template }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-[#cbd5e1]">{{ $template->created_at->diffForHumans() }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.templates.show', $template->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-blue-600 transition-colors">
                                        Review
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @else
        <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl p-12 border border-gray-100 dark:border-[#334155] text-center">
            <svg class="w-16 h-16 mx-auto text-gray-400 dark:text-[#64748b] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">No Pending Templates</h3>
            <p class="text-gray-600 dark:text-[#cbd5e1]">All templates have been reviewed.</p>
        </div>
        @endif
    </div>
</div>
@endsection
