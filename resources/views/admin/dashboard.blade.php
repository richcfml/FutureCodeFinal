<x-admin-layout>

    <div class="wrap">
        <div class="page-head">
            <div class="wrap">
                @session('success')
                <span class="eyebrow"><span class="dot"></span> {{ $value }} </span>
                @endsession

                @session('error')
                <div class="field-error-msg">{{ $value }}</div>
                @endsession
            </div>
        </div>

        <div class="toolbar">
            <div class="search-box">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6.5" cy="6.5" r="5" stroke="currentColor" stroke-width="1.4"/>
                    <path d="M13 13L10.2 10.2" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
                </svg>
                <input type="text" id="search-input" placeholder="Search projects or contacts…">
            </div>
            <div style="display:flex; align-items:center; gap:12px; flex-wrap:wrap;">
                <select class="filter-select" id="filter-criticality" aria-label="Filter by criticality">
                    <option value="">All criticality</option>
                    <option value="Low">Low</option>
                    <option value="Standard">Standard</option>
                    <option value="High">High</option>
                    <option value="Critical">Critical</option>
                </select>
                <span class="result-count mono" id="result-count">{{ $projects->count() }} projects</span>
            </div>
        </div>

        <section class="table-section">
            <div class="table-shell">
                @if($projects->isNotEmpty())
                    <div class="table-scroll">
                        <table>
                            <thead>
                            <tr>
                                <th>Project / Company</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Description</th>
                                <th>Criticality</th>
                            </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach($projects as $project)
                                    <tr>
                                        <td>
                                            <div class="cell-project">{{ $project->company_name }}</div>
                                            <div class="cell-sub">Submitted {{ date_format($project->created_at, 'Y-m-d') }}
                                        </td>
                                        <td>
                                            <div class="cell-name">{{ $project->contact_name }}</div>
                                        </td>
                                        <td>
                                            <div class="cell-email">{{ $project->contact_email }}</div>
                                        </td>
                                        <td>
                                            <div class="cell-phone">{{ $project->contact_phone }}</div>
                                        </td>
                                        <td>
                                            <div class="cell-desc">{{ $project->description }}</div>
                                        </td>
                                        <td>
                                            <span class="badge badge-{{ strtolower($project->criticality) }}">
                                                <span class="dot"></span> {{ $project->criticality }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

                @if($projects->isEmpty())

                        <div class="empty-state" id="empty-state">
                            <div class="empty-icon">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.4"/>
                                    <path d="M16 16L12.5 12.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <h3>No projects found</h3>
                            <p>Try a different search term, or clear the criticality filter.</p>
                        </div>
                @endif
                <div class="table-footer">
                    <p>Data is stored locally in your browser. Clearing site data will remove these records.</p>
                    <p class="mono" id="last-updated"></p>
                </div>
            </div>
        </section>

    </div>

</x-admin-layout>
