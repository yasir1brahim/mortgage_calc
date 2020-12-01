export async function getAllHistory(uid) {

    const response = await fetch('/api/v1/history/'+uid);
    return await response.json();
}

export async function createHistory(data) {
	console.log('data',data);
    const response = await fetch(`/api/v1/history/`, {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify([{
			"key": "user_id",
			"value": "4",
			"description": "",
			"type": "text"
        }])
      })
    return await response.json();
}