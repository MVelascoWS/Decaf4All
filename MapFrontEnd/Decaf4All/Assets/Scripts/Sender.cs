using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using Doozy.Engine;

public class Sender : MonoBehaviour
{
    public string gameEventName;

    public void SendGameEvent()
    {
        Debug.Log("SendMesssage");
        GameEventMessage.SendEvent(gameEventName);
    }
}
